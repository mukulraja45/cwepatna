<?php
class admin extends database
{
    public function save_studentdetails()
    {
        /*$slno=$_POST['serial_no'];
        $sql="select * from  student_details where serail_no='$slno' order by id desc limit 1";
        $result=$this->selectdata($sql);
        $student=$result['single_row'];
        $id=$student['id'];
        $id=$id+1;*/
         $date=date('Y');
        $reg="CWE/3025/".$_POST['serail_no'];
        
            $stuimg = $_FILES['upload_photo']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['upload_photo']["name"]);
            move_uploaded_file($_FILES['upload_photo']["tmp_name"], $target_file); 
            $data=array(
                "reg_no"=>$reg,
                "serail_no"=>null,
                "course"=>$_POST['course'],
                "course_nm"=>$_POST['coursenm'],
                "s_name"=>$_POST['sname'],
                "f_name"=>$_POST['fname'],
                "m_name"=>$_POST['mname'],
                "date_birth"=>$_POST['dob'],
                "mobile_no"=>$_POST['mobile'],
                "email"=>$_POST['email'],
                "f_mobile_no"=>$_POST['fno'],
                "course_fee"=>$_POST['cfee'],
                "c_address"=>addslashes($_POST['caddress']),
                "p_address"=>addslashes($_POST['paddress']),
                "edu_quali"=>$_POST['edu'],
                "Duration"=>$_POST['Duration'],
                "doa"=>$_POST['doa'],
                "upload_photo"=>$stuimg,     
            );
           //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
            if($this->insertdata('student_details',$data)/*mysqli_query($this->link, $sql)*/)
            {
                        //echo "<script>window.location.href ='ad_card.php'</script>";
                $str="New Addmission Successfull Save,Registration No. is $reg ";
            }
           else
            {
                $str="Failed";
                echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
            }
             $_SESSION['msg']=$str;  
       //echo "<script>window.location.href ='certificate_details.php?msg=".$str."'</script>";
        header("Location: new-student-list.php");
        
  
    }
    public function update_student()
    {    
         $stuimg = $_FILES['upload_photo']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['upload_photo']["name"]);
           move_uploaded_file($_FILES['upload_photo']["tmp_name"], $target_file);  
        $data=array(

                "course"=>$_POST['course'],
                "course_nm"=>$_POST['coursenm'],
                "s_name"=>$_POST['sname'],
                "f_name"=>$_POST['fname'],
                "m_name"=>$_POST['mname'],
                "date_birth"=>$_POST['dob'],
                "mobile_no"=>$_POST['mobile'],
                "email"=>$_POST['email'],
                "f_mobile_no"=>$_POST['fno'],
                "course_fee"=>$_POST['cfee'],
                "c_address"=>addslashes($_POST['caddress']),
                "p_address"=>addslashes($_POST['paddress']),
                "edu_quali"=>$_POST['edu'],
                "Duration"=>$_POST['Duration'],
                "doa"=>$_POST['doa'],
                "upload_photo"=>$stuimg,
              );

        $id=$_POST['id'];
        //upload icon
                                                   
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('student_details',$data,"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str=" Student Details Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
         header("Location: update-student.php");
  
    }
    
    public function update_old_studentdetails()
    {    
        $sql="select * from certificate where id>95";
	   	$result=$this->selectdata($sql);
	   	$result=$result['total_row'];
	   	foreach($result as $row)
	   	{
	   	    $serno=explode('E',$row['sl_no']);
	   	    $sid=$row['stu_id'];
	   	    $mnth_yr=explode('/',$row['in_year']);
	   	    $marks=json_decode($row['marks']);
	   	    $sql1="select * from student_details where id='$sid'";
	   	    $result1=$this->selectdata($sql1);
	   	    $student=$result1['single_row'];
	   	    $course_id=$student['course_id'];
	   	    $sql2="select * from add_newcourse where id='$course_id'";
	   	    $result2=$this->selectdata($sql2);
	   	    $course=$result2['single_row'];
	   	   
            $data=array(
    
                    "certificate_type"=>"other_certificate",
                    "gross_speed"=>"",
                    "net_speed"=>"",
                    "typing_grade"=>"",
                    "sl_no"=>$serno[1],
                    "reg_no"=>$student['reg_no'],
                    "place"=>$row['place'],
                    "duaration"=>$course['course_duration'],
                    "c_mounth"=>$mnth_yr[0],
                    "c_year"=>$mnth_yr[1],
                    "certificate_issue"=>$row['doi'],
                    "written_mark"=>$marks->written,
                    "practice_mark"=>$marks->practical,
                    "assign_mark"=>$marks->assignment,
                    "grade"=>$row['grade'],
                    "viva"=>$marks->viva,
                    "status"=>'Enable',
                    "certificate_status"=>"Issue"
                  );
                  
            $this->insertdata('certificate_details',$data);
            $this->updatedata('student_details',array("serail_no"=>$serno[1],"course_nm"=>$course['course_name']),"where id='$sid'");
	   	}
    }
    
    //delete heading
    public function dellete_student($id)
    {
         $str="";
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('student_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            //echo "<script>alert('Student Removed successfull.')</script>";
            $str=" Student Details Removed successfull.";
        }
       else
        {   $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
       // $this->redirect_back();
    }
    public function save_coursedetails()
    {     
        date_default_timezone_set('Asia/Kolkata');
        $now=date('Y-m-d H:i');
           $pimg = $_FILES['catimage']["name"];                                               
           $target_dir = "classfile/slider/";
           $target_file = $target_dir . basename($_FILES['catimage']["name"]);
           move_uploaded_file($_FILES['catimage']["tmp_name"], $target_file); 
        $data=array(
            "image"=>addslashes($pimg),
            "cat_course"=>addslashes($_POST['catcourse']),
            "short_des"=>addslashes($_POST['shortdes']),
            "status"=>addslashes($_POST['status']),        
        );
       //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
        if($this->insertdata('course_category',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str="course save successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
          $_SESSION['msg']=$str;  
         header("Location: course_category.php");
  
    }
    public function dellete_course($id)
    {
        $str="";
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('course_category',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            //echo "<script>alert('Course Removed successfull.')</script>";
              $str=" Course Removed successfull.";
        }
       else
        {
             $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        header("Location: course_category.php");

    }
    public function update_course()
    {


        date_default_timezone_set('Asia/Kolkata');
        $now=date('Y-m-d H:i');
        $pimg = $_FILES['catimage']["name"];                                               
        $target_dir = "classfile/slider/";
        $target_file = $target_dir . basename($_FILES['catimage']["name"]);
        move_uploaded_file($_FILES['catimage']["tmp_name"], $target_file); 
        if(empty($pimg))
        {
            $id=$_POST['id'];
            $sql="select * from  course_category where id='$id'";
	   		$result=$this->selectdata($sql);
	   		if($result!=FALSE)
	   		{
	   		    $row=$result['single_row'];
	   			$pimg= $row['image'];
	   		}
	   		else
	   		return FALSE;
        }
        $data=array(
            "image"=>addslashes($pimg),
            "cat_course"=>addslashes($_POST['catcourse']),
            "short_des"=>addslashes($_POST['shortdes']),
            "status"=>addslashes($_POST['status']),       
        );
        $id=$_POST['id'];
        //upload icon                                                
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('course_category',$data,"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        //$this->redirect_back();
    }
    public function save_newcoursedetails()
    {     
            $cimg = $_FILES['cphoto']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['cphoto']["name"]);
           move_uploaded_file($_FILES['cphoto']["tmp_name"], $target_file);  
        $data=array(
            "cat_course"=>addslashes($_POST['ccat']),
             "course_name"=>addslashes($_POST['cname']),
             "total_fee"=>addslashes($_POST['cfee']),
             "course_duration"=>addslashes($_POST['Duration']),
             "short_des"=>addslashes($_POST['cshort']),
             "course_des"=>addslashes($_POST['c_describe']),
             "image"=>addslashes($cimg),
             "status"=>$_POST['status'],          
            );
       //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
        if($this->insertdata('add_newcourse',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str="New Course save successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        //$this->redirect_back();
    }
    public function dellete_newcourse($id)
    {
        $str="";
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('add_newcourse',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            echo "<script>alert(' New Course Removed successfull.')</script>";
            $str="New Course Removed successfull";
        }
       else
        {
            $str="Failed.";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         $_SESSION['msg']=$str;  
        //$this->redirect_back();
    }
    public function update_newcourse()
    {
       
            $cimg = $_FILES['cphoto']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['cphoto']["name"]);
           move_uploaded_file($_FILES['cphoto']["tmp_name"], $target_file); 
       
        $data=array(
             "cat_course"=>addslashes($_POST['ccat']),
             "course_name"=>addslashes($_POST['cname']),
             "total_fee"=>addslashes($_POST['cfee']),
             "course_duration"=>addslashes($_POST['Duration']),
             "short_des"=>addslashes($_POST['cshort']),
             "course_des"=>addslashes($_POST['c_describe']),
             "image"=>addslashes($cimg),
             "status"=>$_POST['status'],    
        );
        $id=$_POST['id'];
        //upload icon                                             
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('add_newcourse',$data,"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        //$this->redirect_back();
          
    }
    public function save_newcertficate()
    {
        $slno=explode("E",$_POST['sid']);
        $data=array(
            "sl_no"=>$slno[1],
            "certificate_type"=>$_POST['certificate_type'],
            "reg_no"=>$_POST['regno'],
            "place"=>"Patna",
            "c_mounth"=>$_POST['mounth'],
            "c_year"=>$_POST['year'],
            "certificate_issue"=>$_POST['doa'],
            "written_mark"=>$_POST['written'],
            "practice_mark"=>$_POST['pract'],
            "assign_mark"=>$_POST['Assign'],
            "gross_speed"=>$_POST['gross_speed_eng'],
            "net_speed"=>$_POST['net_speed_eng'],
            "hindi_gross_speed"=>$_POST['gross_speed_hindi'],
            "hindi_net_speed"=>$_POST['net_speed_hindi'],
            "short_hand_speed"=>$_POST['short_hand_speed'],
            "typing_grade"=>$_POST['typing_grade'],
            "accuracy"=>$_POST['accuracy'],
            "grade"=>$_POST['grd'],
            "viva"=>$_POST['viv'], 
            "status"=>$_POST['stu'],
            "certificate_status"=>"Issue",
        );
       //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
        if($this->insertdata('certificate_details',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str=" Certificate Issue successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         //echo "<script>window.location.href ='certificate_details.php?msg=".$str."'</script>";
          $_SESSION['msg']=$str;  
        header("Location: certificate_details.php");
    }
    public function dellete_certificate($id)
    {
        $str="";
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('certificate_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            //echo "<script>alert(' New Certificate Removed successfull.')</script>";
            $str="New Certificate Removed successfull";
        }
       else
        {
            $str="Failed.";
             echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
            
        }
        $_SESSION['msg']=$str;  
        $this->redirect_back();
    }
    public function update_certificate()
    {
         $data=array(
            "certificate_type"=>$_POST['certificate_type'],
            "place"=>"Patna",
            "c_mounth"=>$_POST['mounth'],
            "c_year"=>$_POST['year'],
            "certificate_issue"=>$_POST['doa'],
            "written_mark"=>$_POST['written'],
            "practice_mark"=>$_POST['pract'],
            "assign_mark"=>$_POST['Assign'],
            "gross_speed"=>$_POST['gross_speed_eng'],
            "hindi_gross_speed"=>$_POST['gross_speed_hindi'],
            "hindi_net_speed"=>$_POST['net_speed_hindi'],
            "net_speed"=>$_POST['net_speed_eng'],
            "short_hand_speed"=>$_POST['short_hand_speed'],
            "typing_grade"=>$_POST['typing_grade'],
            "grade"=>$_POST['grd'],
            "accuracy"=>$_POST['accuracy'],
            "viva"=>$_POST['viv'], 
            "status"=>$_POST['stu'], 
            "certificate_status"=>"Issue",
        );

        $id=$_POST['reg_no'];
        //upload icon
                                                   
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('certificate_details',$data,"where reg_no='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update Certificate successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        //$this->redirect_back();
        
    }
    public function save_noticedetails()
    {
            $photo = $_FILES['tfile']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['tfile']["name"]);
           move_uploaded_file($_FILES['tfile']["tmp_name"], $target_file); 
        $data=array(
            "type"=>addslashes($_POST['ntype']),
            "title"=>addslashes($_POST['type']),
            "descripsion"=>addslashes($_POST['sdes']),
            "image"=>addslashes($photo),
            "status"=>addslashes($_POST['status']),  
         );
        if($this->insertdata('notice_details',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str=" Save Notice successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
           $_SESSION['msg']=$str;  
        $this->redirect_back();
  
    }
    public function dellete_notice($id)
    {
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('notice_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            echo "<script>alert(' Notice Removed successfull.')</script>";
        }
       else
        {
            //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        $this->redirect_back();
  
    }
    public function update_notice()
    {
            $photo = $_FILES['tfile']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['tfile']["name"]);
           move_uploaded_file($_FILES['tfile']["tmp_name"], $target_file); 
       
        $data=array(
            "type"=>addslashes($_POST['ntype']),
            "title"=>addslashes($_POST['type']),
            "descripsion"=>addslashes($_POST['sdes']),
            "image"=>addslashes($photo),
            "status"=>addslashes($_POST['status']),      
        );
        $id=$_POST['id'];
        //upload icon                                                  
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('notice_details',$data,"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         $_SESSION['msg']=$str;  
        $this->redirect_back();
  
   }
    public function save_sliderdetails()
    {

        date_default_timezone_set('Asia/Kolkata');
        $now=date('Y-m-d H:i');
           /* $bslider = $_FILES['sbimage']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['sbimage']["name"]);
            move_uploaded_file($_FILES['sbimage']["tmp_name"], $target_file); */
            
        $data['type'] = $_POST['stype'];
        $data['status'] = $_POST['status'];
        $data['created_at'] = $now;
         /*$data=array(
            "type"=>($_POST['stype']),
            //"sbi"=>$bslider,
            "status"=>$_POST['status'],
            "created_at"=>$now,
        
         );*/
        $data1 =  $this->insertdata('slider_details',$data);
        if(isset($_FILES["sbimage"]['name']))
            {
    			if (!is_dir('classfile/slider'))
    				mkdir('./classfile/slider', 0777, TRUE);
    			$timg_name = $_FILES['sbimage']['name'];
    			if(!empty($timg_name)){
    				$timage_ext = end(explode(".",strtolower($timg_name)));
    				$timage_name_new = 'Course'.$data1.'-'.$this->n_digit_random(4).'.'.$timage_ext;
    				$imginsertStatus = $this->updatedata('slider_details', array("sbi"=>$timage_name_new), "where id='$data1'");
    				if($imginsertStatus){
    					move_uploaded_file ($_FILES['sbimage']['tmp_name'],"classfile/slider/".$timage_name_new);	
    				}
    			}
            }
        if($data1 > 0)
        {
            
            $str=" Save Slider successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
           $_SESSION['msg']=$str;  
        $this->redirect_back();
  
    }
    public function n_digit_random($digits)
	{ 
	  return rand(pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
	}
	
    public function dellete_slider($id)
    {
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('slider_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Slider Removed successfull.";
            echo "<script>alert(' Slider Removed successfull.')</script>";
        }
       else
        {     $str="Failed";
            //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        $this->redirect_back();
         
    }
    public function update_slider()
    {
            /*$bslider = $_FILES['sbimage']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['sbimage']["name"]);
            move_uploaded_file($_FILES['sbimage']["tmp_name"], $target_file); */
            $data['type'] = $_POST['stype'];
            $data['status'] = $_POST['status'];
            $id=$_POST['id'];
            $data2 = $this->updatedata('slider_details',$data,"where id='$id'");
            if(isset($_FILES["sbimage"]['name']))
            {
    			if (!is_dir('classfile/slider'))
    				mkdir('./classfile/slider', 0777, TRUE);
    			$timg_name = $_FILES['sbimage']['name'];
    			if(!empty($timg_name)){
    				$timage_ext = end(explode(".",strtolower($timg_name)));
    				$timage_name_new = 'Course'.$data2.'-'.$this->n_digit_random(4).'.'.$timage_ext;
    				$imginsertStatus = $this->updatedata('slider_details', array("sbi"=>$timage_name_new), "where id='$id'");
    				if($imginsertStatus){
    					move_uploaded_file ($_FILES['sbimage']['tmp_name'],"classfile/slider/".$timage_name_new);	
    				}
    			}
            }
            
                                                   
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($data2 > 0)
        { 
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
          $_SESSION['msg']=$str;  
        $this->redirect_back();
   }
    public function save_aboutdetails()
    {     
            $aimg = $_FILES['tfile']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['tfile']["name"]);
            move_uploaded_file($_FILES['tfile']["tmp_name"], $target_file);  

        $data=array(
            "title"=>addslashes($_POST['title']),
             "Description"=>addslashes($_POST['sdes']),
             "mision"=>addslashes($_POST['MIS']),
             "vision"=>addslashes($_POST['vis']),
             "our_journey"=>addslashes($_POST['Journey']),
             "our_leadership"=>addslashes($_POST['Leadership']),
             "image"=>$aimg,
             "status"=>$_POST['status'],
             );
       //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
        if($this->insertdata('about_details',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str=" Save About successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
          $_SESSION['msg']=$str;  
        $this->redirect_back();
    }
    public function dellete_about($id)
    {
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('about_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            echo "<script>alert(' About Removed successfull.')</script>";
        }
       else
        {     
            $str="Failed";
            //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         $_SESSION['msg']=$str;  
        $this->redirect_back();
    }
    public function update_about()
    {
            $aimg = $_FILES['tfile']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['tfile']["name"]);
            move_uploaded_file($_FILES['tfile']["tmp_name"], $target_file);  
        $data=array(
            "title"=>addslashes($_POST['title']),
            "Description"=>addslashes($_POST['sdes']),
            "mision"=>addslashes($_POST['MIS']),
            "vision"=>addslashes($_POST['vis']),
            "our_journey"=>addslashes($_POST['Journey']),
            "our_leadership"=>addslashes($_POST['Leadership']),
            "image"=>$aimg,
            "status"=>$_POST['status'],
            );
        $id=3;

        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('about_details',$data,"where id='3'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        $this->redirect_back();
   }
    public function save_teacheretails()
    {     
            $teac = $_FILES['Faculty']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['Faculty']["name"]);
            move_uploaded_file($_FILES['Faculty']["tmp_name"], $target_file);  
        $data=array(
            "teacher_nam"=>addslashes($_POST['nam']),
             "teacher_post"=>addslashes($_POST['post']),
             "descripsion"=>addslashes($_POST['de']),
             "image"=>$teac,
             "status"=>$_POST['status'],
             );
       //$sql="insert into category_details(category,status,create_at) values('$head','$file',now())";
        if($this->insertdata('teacher_details',$data)/*mysqli_query($this->link, $sql)*/)
        {
                    //echo "<script>window.location.href ='ad_card.php'</script>";
            $str=" Save Teacher successfully ";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
        $_SESSION['msg']=$str;  
        $this->redirect_back();
    }
    public function dellete_teacher($id)
    {
        //$sql="delete from  category_details where catid='$catid'";
        if($this->deletedata('teacher_details',"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            echo "<script>alert(' About Removed successfull.')</script>";
        }
       else
        {
            $str="Failed";
            //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         $_SESSION['msg']=$str;  
        $this->redirect_back();
    }
    public function update_teacher()
    {
            $teac = $_FILES['Faculty']["name"];                                               
            $target_dir = "classfile/slider/";
            $target_file = $target_dir . basename($_FILES['Faculty']["name"]);
            move_uploaded_file($_FILES['Faculty']["tmp_name"], $target_file);  
        $data=array(
            "teacher_nam"=>addslashes($_POST['nam']),
            "teacher_post"=>addslashes($_POST['post']),
            "descripsion"=>addslashes($_POST['de']),
            "image"=>$teac,
            "status"=>$_POST['status'],    
        );
        $id=$_POST['id'];
        //upload ico                                             
        $str="";
         //$sql="update category_details set category='$head',status='$file' where catid='$catid'";
        if($this->updatedata('teacher_details',$data,"where id='$id'")/*mysqli_query($this->link, $sql)*/)
        {
            $str="Update successfully";
        }
       else
        {
            $str="Failed";
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
         $_SESSION['msg']=$str;  
        $this->redirect_back();
   }
   public function doUpdateEstoreProgrammeStatus() // req

	{
		$entereddata=array();
		$entereddata['updated_at']=date('Y-m-d H:i:s');
		//$entereddata['updated_by']=$this->session->userdata("sess_admuser_id");
		$task = $_POST['task'];
		if($task == 'active')
			$entereddata['status']=Enable;
		else
			$entereddata['status']=Disable;
		$sel_recds = $_POST['sel_recds'];
		$insertStatus = $this->updateMultipleRecord($entereddata,'update_slider',$sel_recds);
		if($insertStatus == 1) 
            {
			$str="upd_success";	
            }
		else
            {
			$str="fail";
            }
         $_SESSION['msg']=$str;  
        $this->redirect_back();
	}
	
	
	
 }
$adm= new admin();   
?>
