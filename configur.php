<?php

define('DB_Server','localhost');
define('DB_USERNAME','root');
define('DB_Password','');
define('DB_Name','writeup');

$conn=mysqli_connect(DB_Server,DB_USERNAME,DB_Password,DB_Name);
if($conn==false){
    die('Error : Cannot connect');
}

?>
