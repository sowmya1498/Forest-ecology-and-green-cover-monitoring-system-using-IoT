<?php

$con=mysqli_connect('localhost','root','','kaanana');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'kaanana'))
{
	echo 'database not connected';
}


?>
