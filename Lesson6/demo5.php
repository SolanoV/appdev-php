<?php 

//$_SESSION
session_start();

//set session variable

$_SESSION['username']='luffy';
$_SESSION['username2']='zoro';

echo $_SESSION['username'];
echo '<br>';
echo $_SESSION['username2'];

?>