<?php
session_start();

//read session data
// print_r($_SESSION);
if(isset( $_SESSION["username"])){
    echo $_SESSION["username"];
}
else{
    echo "Data not found";
}
?>