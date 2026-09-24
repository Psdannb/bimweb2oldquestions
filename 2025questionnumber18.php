<?php
/*
Question:2025
A file named "employee.txt" contains the list of employees name. Write a program to read the contents of the file and displays all employees whose name starts With 'A'. [5 marks]
Solution:
*/
$filepointer=fopen("employee.txt",'r');
while(true){
    $names=fgets($filepointer);
    if($names==false){
        // echo "I am the end of the file";
        break;
    }
    $firstletter=$names[0];
   
    if($firstletter=='A'){
 echo $names;
   echo "<br>";
    }
  
}
?>