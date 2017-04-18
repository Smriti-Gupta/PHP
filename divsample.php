<?php
echo " ";
?>
<html>
    <head>
        <title>div sample</title>
        <style>
            .whole{
                width:1000px;
                height:1000px;
                color:coral;
                border:2px solid black;
                margin:0px auto;
            }
            .header{
                width:996px;
                height:70px;
                background:steelblue;
                
                position:relative;
                left:0px;
                right:0px;
                border:2px solid cornflowerblue;
            }
            .header h1{
                padding:0px 0px 0px 250px 
            }
            .navigator{
                width:996px;
                height:50px;
                background:antiquewhite;
                background:url("images/whiteblack.jpg");
                position:relative;
                left:0px;
                right:0px;
                border:2px solid cornflowerblue;
            }
             .banner{
                 width:1000px;
                     height:40px;
                     background:darkgrey;
                     position:relative;
                     left:0px;
                     right:0px;
                  //  border:2px solid cornflowerblue;
             }
            .banner .whatsnew img{
                width:331px;
                height:339px;
                background:activecaption;
                float:left;
                position:relative;
                top:20px;
                left:0px;
                border:2px solid cornflowerblue;
             }
            
             .banner .image img{
                 width:661px;
                 height:339px;
                 background:activecaption;
                 float:right;
                 position:relative;
                 top:20px;
                 right:0px;
                 border:2px solid cornflowerblue;
             }
            .banner .image img ul{
                 padding:5px 5px 5px 5px;
                 float:left;
                 text-align:justify;
             }
            
                .whole .text{
                     width:996px;
                     height:345px;
                     background:gray;
                     position:relative;
                     top:343px;
                     left:0px;
                     right:0px;
                    border:2px solid cornflowerblue;
                     
                 }
                .whole .footer{
                     width:996px;
                     height:137px;
                     background:silver;
                     position:relative;
                     top:343px;
                     left:0px;
                     right:0px;
                     border:2px solid cornflowerblue;
                 }
                 .navigator ul li {
                     float:left;
                     list-style-type:none;
                 
                 }
                .navigator ul li a{
                     padding:0px 0px 0px 140px;
                     float:left;
                     display:block;
                     font-size:16px
                 }
             
             
             
            
        </style>
    </head>
    <body>
        <div class="whole">
            <div class="header">
                <h1> LEARNING ABOUT WEB SITE</h1>
            </div>
            <div class="navigator">
                <ul>
                    <li><a href="#" title="home page">Home</a><li>
                    <li><a href="#" title="about us">About Us</a></li>
                    <li><a href="#" title="contact">Contact</a></li>
                    <li><a href="#" title="gallery">Gallery</a></li>
                </ul>
                
            </div>
            
            <div class="banner"> banner
                <div class="whatsnew" >
                    <ul>
                        <marquee direction="bottom" behaviour="scroll" scrollamount="3px">
                        <li>you can registered by filling the registration form for admissions</li>
                        <li>Now Entrance Exam form will be available till <b>20<sup>th</sup> may</b></li>
                        </marquee>
                    </ul>
                </div>
                <div class="image">
                <img src="images/laptop.jpg" alt="laptop image"/>
                </div>
            </div>
        <div class="text">text</div>
        <div class="footer">footer</div>
        </div>
    </body>
</html>