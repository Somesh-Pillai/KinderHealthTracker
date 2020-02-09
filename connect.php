<?php
   
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ('localhost' ,'root', 'admin') or die("unable to connect to host");  
       $sql = mysql_select_db ('test',$conn) or die("unable to connect to database"); 
$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else {
$stmt=$conn->prepare("insert into registration(name, userid, bp, hr, weight, password)
   values(?,?,?,?,?,?)");
$stmt->bind_param("ssiiis",$name,$userid,$bp,$hr,$weight,#password);
$stmt->execute();
echo "Entry Successfull";
$stmt->close();
$conn->close();
?>   
