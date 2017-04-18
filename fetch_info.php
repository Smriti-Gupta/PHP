<?php
                                 if($_POST['submit'])
                                {
                                   $name = $_POST['name'];
                                   $age = $_POST['age'];
                                   $email = $_POST['email'];
                                   $password1 = $_POST['pass'];
                                }
                                $host_name = "localhost";
                                $username = "root";
                                $password = "admin";
                                
                                $dbconn = mysql_connect( $host_name,$username,$password)
                                       or die("Unable to connect to MySQL");
                                         echo "Connected to MySQL<br>";
                                         $sql = "insert into user_info values('$name' , $age , '$email' ,'$password1')";
                                         $selectdb = mysql_select_db("user",$dbconn)
                                         or die("Could not select user");
                                         $resource = mysql_query($sql,$dbconn);
                                          if(!$resource) 
                                                 {
                                                  die('Could not enter data: ' . mysql_error());
                                                 }
            
                                         echo "Entered data successfully\n";
                                      //   echo "<script> location.href='check_info.php'; </script>";
                                         
                                         mysql_close($dbconn);
                                         
?>

