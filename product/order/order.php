<?php
ob_start();
session_start();
	
if(!isset($_SESSION["intLine"]))
{

	 $_SESSION["intLine"] = 0;
	 $_SESSION["str_pro_id"][0] = $_GET["pro_id"];
	 $_SESSION["str_qty"][0] = 1;

	//  header("location:show.php");
}
else
{
	
	$key = array_search($_GET["pro_id"], $_SESSION["str_pro_id"]);
	if((string)$key != "")
	{
		 $_SESSION["str_qty"][$key] = $_SESSION["str_qty"][$key] + 1;
	}
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["str_pro_id"][$intNewLine] = $_GET["pro_id"];
		 $_SESSION["str_qty"][$intNewLine] = 1;
	}
	
	//  header("location:show.php");      

}
?>