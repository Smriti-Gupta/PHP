<html>
        <head>
            <title>
                Table 
            </title>
         </head>
                  <body>
                          <?php
                                    $id = $_POST['id'];
                                    $name = $_POST['name'];
                                    $age = $_POST['age'];
                                if($_POST['submit'])
                                {   
                                    echo "Your details are:";
                                    echo "Id:".$_POST['id']."<br>";
                                    echo "Name:".$_POST['name']."<br>";
                                    echo "Age:".$_POST['age']."<br>";
                                }
                                $host_name = "localhost";
                                $username = "root";
                                $password = "admin";
                                
                                $dbconn = mysql_connect( $host_name,$username,$password )
                                       or die("Unable to connect to MySQL");
                                         echo "Connected to MySQL<br>";
                                         $sql = "insert into user_info values($id , '$name' , $age)";
                                         $selectdb = mysql_select_db("user",$dbconn)
                                         or die("Could not select user");
                                         $resource = mysql_query($sql,$dbconn);
                                          if(! $resource ) 
                                                 {
                                                  die('Could not enter data: ' . mysql_error());
                                                 }
            
                                         echo "Entered data successfully\n";
            
                                       
                                        
                                         mysql_close($dbconn);
                          ?>
                   </body>
</html>
 