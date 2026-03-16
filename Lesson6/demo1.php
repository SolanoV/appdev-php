<?php

//PHP Superglobal - $_GET

//var_dump($_GET);

//echo $_GET['name'];
/*
if(isset($_GET['name'])){
    echo $_GET['name'];
}
    */

//echo $_GET['name'] ?? '';

//echo $_GET['name'] ?? 'Guest';

if(isset($_GET['name'])){
    echo htmlspecialchars($_GET['name']);
}

?>