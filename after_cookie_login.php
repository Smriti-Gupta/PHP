<?php
     if(isset($_COOKIE['name']))
    {
            echo "welcome"." ".$_COOKIE['name']."<br>";
          //  echo "your details are:"."<br>";
          //  echo "Id:"." ".$iddb."<br>";
           // echo "Name:"." ".$namedb."<br>";
           // echo "Gender:"." ".$genderdb."<br>";       
        
    }
    
    else
    {
        header("location: login_cookie.php");
    }
?>

