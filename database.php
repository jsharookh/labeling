<?php
$connect=mysqli_connect('localhost','root','','alfakhama');
mysqli_set_charset( $connect,'utf8');
if(mysqli_connect_errno($connect))
{
    
		echo 'Failed to connect';
}


?>