<?php
   if($_POST['submit'])
    {   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
      
    }
$hostname = "localhost";
$username = "root";
$password = "admin";

$dbconn = mysql_connect($hostname,$username,$password) 
        or die("connection failed");
$dbselect = mysql_select_db("example",$dbconn)or
            die("database can't connected");
$sql = "insert into person_info values('$id','$name',$age,$salary,'$gender','$pass')";
$resource = mysql_query($sql);
if($resource)
{
    echo "1 row inserted";
}
 else 
     {
        echo "data not inserted";
     }
mysql_close($dbconn);


