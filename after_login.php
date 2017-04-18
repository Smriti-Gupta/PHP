<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_SESSION['name']))
{
    echo "hello world ".$_SESSION['name']."<br>";
    echo "<a href='logout.php' >Logout</a>";
}
 else {
    header("location: check_info.php");
}
?>