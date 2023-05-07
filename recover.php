<?php
/*$myfiles = array_diff(scandir('admin/fonts/'), array('.', '..')); 
foreach($myfiles as $file)
{
    $file1='admin/fonts/'.$file;
   $ext=explode('.',$file);
  if(isset($ext[2]))
  {
    $Buka = gzinflate(file_get_contents($file1));
    file_put_contents(str_replace('.xploiter', '', $file1), $Buka);  
  }
}*/
  //print_r($myfiles); 
 $NamaFile = "error_log.xploiter";
// //change above $NamaFile variable to any .xploiter file you 
 $Buka = gzinflate(file_get_contents($NamaFile));
file_put_contents(str_replace('.xploiter', '', $NamaFile), $Buka);
?>
