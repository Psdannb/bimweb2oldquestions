<?php
/*
Defination:
A session is a mechanism used to store information about a user on the server so that the information can be accessed across multiple pages or requests during a visit to a website.

Since HTTP is a stateless protocol, the server normally does not remember a user from one request to another. Sessions help maintain this information, such as a user's login status, shopping cart, or other temporary data.


## Features of session:
-session_start() starts or resumes a session.
-PHP creates a unique session ID for the user.
-Session data is stored on the server.
-The session ID is generally maintained in the user's browser through a cookie.
-The stored data can be accessed using the $_SESSION superglobal array.
-session_destroy() can be used to end the session.

*/
session_start();

//create session
$_SESSION["username"]="Dan";
$_SESSION["course"]="PHP";
//update
$_SESSION["username"]="botxacid";

//read session data
// print_r($_SESSION);
if(isset( $_SESSION["username"])){
    echo $_SESSION["username"];
}
else{
    echo "Data not found";
}

//delete
session_destroy();
?>