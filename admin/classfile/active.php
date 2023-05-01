<?php

 include "../config/config.php";
 include "../config/database.php";
 include "../classfile/admin.php";
 include "../classfile/data.php";
    $adm=new admin();
    $da=new data();
    $db=new database();
    
    
     if (isset($_POST['task']) && $_POST['sel_recds']) 
     {
         
                $entereddata=array();
        		$entereddata['updated_at']=date('Y-m-d H:i:s');
        		//$entereddata['updated_by']=$this->session->userdata("sess_admuser_id");
        		$task = $_POST['task'];
        		if($task == 'active')
        			$entereddata['status']="Enable";
        		else
        			$entereddata['status']="Disable";
        		$sel_recds = $_POST['sel_recds'];
        		$insertStatus = $db->updateMultipleRecord($entereddata,'update_slider',$sel_recds);
        		if($insertStatus == 1) 
                    {
                        echo "<script>window.location.href ='slider_details.php'</script>";
        		    echo "<script>alert('Update successfull.')</script>";
        		    $str="Update";
                    }
        		else
                    {
        			$str="fail";
                    }
                 $_SESSION['msg']=$str;  
               $da->redirect_back();
   }
?>