<?php

//session start
session_start();

//creare constant to store non repeating value

define('LOCALHOST', 'localhost' );
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_evoting');


$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME); //database connection 


if (!$con){
    
    die("<script>alert('Conection Failed)</script>");
}

?>