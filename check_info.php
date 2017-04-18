<?php
      echo " " ;                                 
?>
<html>
    <head>
        <title> Registration Form </title>
    </head>
    <body>
        <form action = "Display.php" method = "POST">
            <fieldset>
                <legend>Registration Form </legend>
                <table>
                    <h1> Confirm your Email & Password </h1>
                    <tr>
                        <td>Email:<input type="text" name="email1" id ="email1"/>
                    </tr>
                    <tr>
                        <td>Password:<input type="password" name="pass1" id ="pass1" value=" "/>    
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit1" id="submit1" value="submit"</td>
                    </tr>
                </table>
            </fieldset>    
        </form>
    </body>
</html>

