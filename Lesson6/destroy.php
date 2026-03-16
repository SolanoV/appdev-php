<?php

session_start();


//unset

unset($_SESSION['username']);
//unset($_SESSION['username2']);


session_destroy();
//echo $_SESSION['username'];
//echo $_SESSION['username2'];

echo 'Session Destroyed.';


?>