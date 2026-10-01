<?php
/*
Question :
what is the role of the cookies in PHP? How can you set,retrieve, and delete a cookie? [5 marks].
Solution:
A cookie is a small piece of data stored in the user's web browser by a website. 
cookies are mainly used to remember information about a user between different requests or visits.

## Role of Cookies
1. Maintaining user preferences: They can store preferences such as language, theme, or font size.
2. Remembering users: Cookies can remember a user's login or other information.
3. Session-related tasks: They can help identify a user's browser during a session.
4. Tracking user activity: Websites can use cookies to track visits and user behavior.
5. Storing small amounts of data: Cookies are suitable for storing small pieces of non-sensitive information on the client side.
*/
//setting a cookie
// syntax:
// setcookie(name,value,expire)
setcookie("username","Dan",time()+3600);
//update
setcookie("username","botxacid");
//access the cookie/retrieve
if(isset($_COOKIE['username'])){
echo $_COOKIE['username'];
}

//delete cookie
 setcookie("username","Dan",time()-3600);

?>