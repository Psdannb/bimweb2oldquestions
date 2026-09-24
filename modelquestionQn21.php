<?php
/*
Question:
Write a server-side script in PHP to illustrate inserting and retrieving data to and from the database table. Create required connection using your own assumptions. use HTML form to insert and display data.
Solution:
*/

// Database connection
$conn= mysqli_connect ("localhost","root","","college");
if(!$conn){
    die("Connection failed");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $useremail=$_POST['useremail'];
    $useraddress=$_POST['useraddress'];
    $insertsql="INSERT INTO students(name,email,address)VALUES('$username','$useremail','$useraddress')";
    if(mysqli_query($conn,$insertsql)){
        echo "data added sucessfully";
    }
}
$fetchdata= "SELECT * FROM students";
$response=mysqli_query($conn,$fetchdata);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old Question solution</title>
</head>

<body>
    <form method="post">
        Name: <input type="text" name="username" required />
        <br><br>
        Email: <input type="email" name="useremail" required />
        <br><br>
        Address: <input type="text" name="useraddress" required />
        <br><br>
        <input type="submit" value="Insert data">
    </form>
    <table border="1" cellpadding="2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
if($response){
    foreach($response as $data){
        ?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['address']; ?></td>
            </tr>
            <?php
    }
}
         ?>
        </tbody>
    </table>
</body>

</html>