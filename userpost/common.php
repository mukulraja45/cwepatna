<?php
class common
{
     public function folder_exist($folder)
     {
        $user=$_SESSION['loginid'];
        if(!(is_dir("uploaded/".$user)))
        {
            mkdir("uploaded/".$user, 0777, true);
        }
        if(!(is_dir("uploaded/".$user."/".$folder)))
        {
            mkdir("uploaded/".$user."/".$folder, 0777, true);
            return $path;
        }
        return false;
     }
     public function upload_photo($directory,$file)
     {
        $photo = $_FILES[$file]["name"];                                               
        $target_dir = "uploaded/".$directory."/";
        $target_file = $target_dir . basename($_FILES[$file]["name"]);
        move_uploaded_file($_FILES[$file]["tmp_name"], $target_file); 
     }

      public function getpost_details()
       {
            $sql="select * from follow_details";
            $result=$this->selectdata($sql);
            //$result=mysqli_query($this->link,$sql);
            return $result;
       }
}
?>