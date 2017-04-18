<?php
echo "";
?>
<html>
    <head>
        <title> Registration Form </title>
    </head>
    <body>
        <form action = "fetch_info.php" method = "POST">
            <fieldset>
                <legend>Registration Form </legend>
                <table>
                    <tr>
                        <td>Name:<input type="text" name="name" id ="name"/></td>
                    </tr>
                    <tr>
                        <td>Age:<input type="text" name="age" id ="age"/> 
                    </tr>
                    <tr>
                        <td>Email:<input type="text" name="email" id ="email" value=" "/>
                    </tr>
                    <tr>
                        <td>Password:<input type="password" name="pass" id ="pass" value=" "/>    
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" id="submit" value="submit"/></td>
                    </tr>
                </table>
            </fieldset>    
        </form>
    </body>
</html>

