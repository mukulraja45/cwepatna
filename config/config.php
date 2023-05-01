<?php
class config
{
	public $link;
	protected $sql;
	public static $ctr=1;
	public function __construct()
	{
		$this->link = mysqli_connect("localhost", "root", "", "");
     
		// Check connection
		if($this->link === false)
		{
   		 	die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	}
	public function redirect_back()
    {
        if(isset($_SERVER['HTTP_REFERER']))
        {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else
        {
            header('Location: http://'.$_SERVER['SERVER_NAME']);
        }
        exit;
    }
}
$con=new config();
?>
