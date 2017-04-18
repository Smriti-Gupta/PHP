
<html>
    <head>
        <title>
            action at same file
        </title>
    </head>
    <body>
        <form action="after_post.php" method="POST">
            <fieldset>
                <legend>Registration Form</legend>
                <table>
                    <tr>
                        <td>Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="id" id="id" value=" "/></td>
                    </tr> 
                    <tr>
                        <td>Name:&nbsp<input type="text" name="name" id="name" value=" "/></td>
                    </tr>
                    <tr>
                        <td>Age:&nbsp&nbsp&nbsp&nbsp<input type="text" name="age" id="age" value=" "/><td>
                    </tr>
                    <tr>
                    <td>salary:&nbsp<input type="text" name="salary" id="salary" value=" "/></td>
                    </tr>
                    <tr>
                        <td>Gender:<input type="radio" name="gender" value="male"/>Male</td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="female"/>Female</td>
                    </tr>
                    <tr>
                        <td>Set Password:<input type="password" name="pass" id="pass" value=" "/></td>
                    </tr>
                    <tr>    
                        <td><input type="submit" name="submit" value="submit"/></td>
                    </tr>    
                </table>       
            </fieldset>
        </form>
    </body>
</html>



