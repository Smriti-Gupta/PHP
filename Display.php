<?php           
            session_start();
                
                if($_POST['submit1'])
                {
                    $email1 = $_POST['email1'];
                    $pass1 = $_POST['pass1'];
                   // echo $email1;
                }    
                    $host_name = "localhost";
                    $username = "root";
                    $password = "admin";
                                
                                    $dbconn1 = mysql_connect( $host_name,$username,$password)
                                       or die("Unable to connect to MySQL");
                                        // echo "Connected to MySQL<br>";
                                         // echo "<br> database selected <br>";
                                         $sql1 = "select * from user_info where Email = '$email1' AND Password = '$pass1'";
                                         echo "<br>".$sql1."<br>";
                                         $selectdb1 = mysql_select_db("user",$dbconn1) 
                                         or die("could not connect to database");
                                         $resource1 = mysql_query($sql1,$dbconn1);
                                         $result = mysql_fetch_array($resource1);
                                         if($result)
                                             
                                         {      
                                                
                                             $namedb = $result['Name'];
                                             $agedb = $result['Age'];
                                             $emaildb = $result['Email'];
                                             $passdb = $result['Password'];
                                            // echo $emaildb;
                                            // echo $email1;
                                            session_regenerate_id();
                                            $_SESSION['name']=$namedb;
                                            session_write_close();
                                             header("location: after_login.php");
                                         }
                                         else
                                         {
                                             echo "data not fetched";
                                         }
                                         
                                           // echo "your Details are:.<br>";
                                          //  echo "Name:"." ",$namedb."<br>";
                                          //  echo "Age:"." ",$agedb."<br>";
                                           // echo "Email:"." ",$emaildb."<br>";
                                             
                                         
                                       
                                          //  echo "incorrect Email & Password";
                                        
                                         mysql_close($dbconn1);
    
                                         
  
    
?>
