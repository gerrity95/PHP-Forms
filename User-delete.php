<?php

define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if (!$link)
	{
		die('Could not connect: ' . mysql_error());
	}


$db_selected = mysql_select_db(DB_NAME, $link);

	if (!$db_selected)
	{
		die('Cannot use ' . DB_NAME . ': ' . mysql_error());
	}

$name = $_POST['name'];
$query = "delete from Users where User_ID = '".$name."'";

if(mysql_query($query)){
echo 'The data has been successfully deleted';
echo '<br>';
echo 'To return to the previous page <a href="" >please click here</a>';
echo '<br>';
echo 'To view the * database <a href="" >please click here </a>';
echo '<br>';
echo 'To go back to the homepage <a href="">please click here</a>'; 
}
else{
echo "fail";}

?>