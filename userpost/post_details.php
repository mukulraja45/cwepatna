<?php
class post_details extends database
{
	public function getallpost_list()
	{
		 $sql="select * from post_details";
         $postlist=$this->selectdata($sql);
         if($postlist!=FALSE)
         {
         	return $postlist['total_row'];
         }
         else
         	return FALSE;
	}
  public function getallcomment_list()
  {
     $sql="select * from follow_details";
         $commentlist=$this->selectdata($sql);
         if($commentlist!=FALSE)
         {
          return $commentlist['total_row'];
         }
         else
          return FALSE;
  }
   public function likedislike($pid)
   {
      $use=new user();
       $sql="select * from follow_details where followed='$pid' and follow_by='$use->user_id' and type='likedislike' order by id desc limit 1";
       $st='like';
       $followlist=$this->selectdata($sql);
         if($followlist!=FALSE)
         {
            $data=$followlist['single_row'];
            $st=$data['status']=='like'?'dislike':'like';
         }
            $ins_data['followed']=$pid;
            $ins_data['type']='likedislike';
            $ins_data['follow_by']=$use->user_id;
            $ins_data['status']=$st;
            $ins_data['date_time']=date('Y-m-d');
            //$ins_data['ip_add']=$this->ipAddress();;
            
              if($this->insertdata('follow_details',$ins_data))
              {
                  $str="success";
                  $this->activity_log($use->user_id,'post '.$st.'-'.$pid,'success');
                  return $st;
              }
             else
              {
                  return FALSE;
                  //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
              }
   }
  public function getlikedislike($pid)
   {
      $use=new user();
       $sql="select * from follow_details where followed='$pid' and follow_by='$use->user_id' and type='likedislike' order by id desc limit 1";
         $followlist=$this->selectdata($sql);
         if($followlist!=FALSE)
         {
            $data=$followlist['single_row'];
            $st=$data['status'];
            return $st;
         }
         else
          return FALSE;
           
   }  
  public function getcomment($id)
    {
         //$user_id=$_SESSION['loginid'];
         $sql="select * from follow_details where id='$id'";
         $comment=$this->selectdata($sql);
         if($comment!=FALSE)
            return $comment['single_row'];
         else
            return FALSE;
    }


   public function savecomment($pid,$cmt)
   {
      $use=new user();
       
            $ins_data['followed']=$pid;
            $ins_data['type']='comment';
            $ins_data['comment']=$cmt;
            $ins_data['follow_by']=$use->user_id;
            $ins_data['status']='comment';
            $ins_data['date_time']=date('Y-m-d');
            //$ins_data['ip_add']=$this->ipAddress();;
            
              if($this->insertdata('follow_details',$ins_data))
              {
                  $str="success";
                  $this->activity_log($use->user_id,'post comment'.$cmt.'-'.$pid,'success');
                  return $str;
              }
             else
              {
                  return FALSE;
                  //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
              }
   }
   public function getallcomment($post_id)
   {
      $use=new user();
      $sql="select * from follow_details where followed='$post_id' and type='comment'";
      $comment=$this->selectdata($sql);
      if($comment!=FALSE)
      {
        $str="";
          $totaldata=$comment['total_row'];
          foreach($totaldata as $data)
          {  
            
            $profile=$use->getuserprofile($data['follow_by']);
            $cmt=$data['comment'];
            $nm=$profile['name'];
            $str=$str."
             <tr>
                <td><div class='comment-timestamp'>".$data['created_at']."</div></td>
                <td><div class='comment-user'>".$nm."</div></td>
                <td>
                    <div class='comment-avatar'>
                        <img src=''>
                     </div>
                </td>
                <td>
                    <div id='comment-4' data-commentid='4' class='comment comment-step1'>
                       ".$cmt."   
                    </div>
                </td>
              </tr>";
          }
          echo $str;
      }
      else
      echo "no comment available";
   }
}
$pos=new post_details();
?>