<?php   
/*
Question:
Explain the importance of prepared statements. Write a PHP program to insert the student info (id,rollno,name, marks and remarks)into a table named 'marks'. Make all required Assumptions regarding database.[5 Marks]

Solution:
A prepared statement is a method of executing SQL queries in which the SQL statement is first prepared with placeholders, and the actual values are supplied separately.
Prepared statements are important when inserting user-provided data into a database because they help prevent SQL Injection and make database operations safer and more reliable.
Importance of Prepared Statements are as follows:
1.Prevents SQL Injection: User input is treated as data rather than part of the SQL command.
2.Improves Security: It protects sensitive database operations from malicious input.
3.Separates SQL and Data: The SQL query and user-supplied values are handled separately.
4.Improves Readability: Queries become easier to understand and maintain.
5.Useful for Repeated Queries: The same prepared query can be executed multiple times with different values.

2nd part code
*/
// first of all let's establish connection with the database
$conn=mysqli_connect("localhost","root","","college");
if(!$conn){
    die("Connection failed");
}
//hardcoded data
$id=3;
$rollno=101;
$name="sita";
$marks="97.5";
$remarks="Excellent";

//prepare SQL statement
$insertsql="INSERT INTO marks(id,rollno,name,marks,remarks)VALUES(?,?,?,?,?)";
$stmt=$conn->prepare($insertsql);

//bind values
$stmt->bind_param("iisds",$id,$rollno,$name,$marks,$remarks);

//Execute statement
if($stmt->execute()){
    echo "Student data added sucessfully";
}
else{
    echo "failed to add student data";
}

//close statement and connection
$stmt->close();
$conn->close();
?>