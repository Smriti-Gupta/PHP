<?php

   
if($_REQUEST['login'])
{
    $id = $_REQUEST['id'];
    $pass = $_REQUEST['pass'];
}
$hostname = "localhost";
$username = "root";
$password = "admin";

$dbconn = mysql_connect($hostname,$username,$password) 
        or die("connection failed");

$sql ="select * from person_info where Id='$id' && Password='$pass'";
$dbselect = mysql_select_db("example",$dbconn)or
            die("database can't connected");
$resource = mysql_query($sql,$dbconn);
$result = mysql_fetch_array($resource);
if($result)
{
    $agedb = $result['Age'];
    $iddb = $result['Id'];
    $namedb = $result['Name'];
    $genderdb = $result['Gender'];
    $salarydb = $result['Salary'];
    // echo "Name:".$namedb."<br>";
   // echo "Age:".$agedb."<br>";
   // echo "Gender:".$genderdb."<br>";
   setcookie("name",$namedb,time()+60);
    header("location: after_cookie_login.php");
    
}
 else
 {
     echo "invalid id & password";
 }

mysql_close($dbconn);
?>
