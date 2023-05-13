<?php
@session_start();
class user extends database
{
    public $user_id="";
    public $user_type="";
    private $com;
    public function __construct()
    {
        if ($_SESSION['user_id']!=true) 
        {
            echo "<script>location.href='index.php';</script>";
        }
        $this->user_id=$_SESSION['loginid'];
        $this->user_type=$_SESSION['type'];
        $this->com=new common();
    }
    public function getpermission_check()
    {
         $sql="select * from menu_details where user='$this->user_type'";
         $menulist=$this->selectdata($sql);
         return $menulist;
    }
    public function getprofile()
    {
         //$user_id=$_SESSION['loginid'];
         $sql="select * from user_details where id='$this->user_id'";
         $profile=$this->selectdata($sql);
         return $profile;
    }
    public function getuserprofile($id)
    {
         //$user_id=$_SESSION['loginid'];
         $sql="select * from user_details where id='$id'";
         $profile=$this->selectdata($sql);
         if($profile!=FALSE)
            return $profile['single_row'];
         else
            return FALSE;
    }
   
    public function upload_cover_photo()
    {
        if(!($this->com->folder_exist("cover_photo")))
        {
            $this->com->upload_photo($this->user_id.'/cover_photo','cphoto');  
            $data['cover_pic']=$_FILES['cphoto']["name"];
            $res=$this->updatedata("user_details",$data,"where id='$this->user_id'");
            $this->activity_log($this->user_id,'change cover photo','success');
            echo "<script>alert('cover photo changed successfully');</script>";
            echo "<script>location.href='mr-profile.php';</script>";
        }
        else
        {
            echo "<script>alert('Failed');</script>";
            echo "<script>location.href='mr-profile.php';</script>";
        }
    }
    public function upload_profile_photo()
    {
        if(!($this->com->folder_exist("profile_photo")))
        {
            $this->com->upload_photo($this->user_id.'/profile_photo','pphoto');  
            $data['profile_pic']=$_FILES['pphoto']["name"];
            $res=$this->updatedata("user_details",$data,"where id='$this->user_id'");
            $this->activity_log($this->user_id,'change cover photo','success');
            echo "<script>alert('profile photo changed successfully');</script>";
            echo "<script>location.href='mr-profile.php';</script>";
        }
        else
        {
            echo "<script>alert('Failed');</script>";
            echo "<script>location.href='mr-profile.php';</script>";
        }
    }


    public function save_post()
    {
         
        if(isset($_FILES['video']["name"]))  
        {
            if(!($this->com->folder_exist("userpost")))
            {
                $this->com->upload_photo($this->user_id.'/userpost','video');  
                $data['video']=$_FILES['video']["name"];
            }
            else
            {
                echo "<script>alert('Failed');</script>";
                echo "<script>location.href='home.php';</script>";
            }
        }
        $data['post']=$_POST['post'];
        $data['user_id']=$this->user_id;
        if($this->insertdata('post_details',$data))
        {
            $str="success";
            $this->activity_log($this->user_id,'upload post','success');
             echo "<script>alert('Post successfully Update');</script>";
           
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        return $str;
  
    }

    
    public function followdetails()
    {
         
        $data['post']=$_POST['post'];
        $data['user_id']=$this->user_id;
        if($this->insertdata('follow_details',$data))
        {
            $str="success";
            $this->activity_log($this->user_id,'upload post','success');
             echo "<script>alert('Follow successfully ');</script>";
           
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        return $str;
  
    }
 
}
$use=new user();
?>