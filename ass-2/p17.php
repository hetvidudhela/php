<?php
/*
        write a php program to enter username and password. If user enter wrong username then
        display error message as username is wrong, please try again. If user enter wrong password than
        display error message as your password is wrong. If User enters wrong username and password than
        display error message as your username and password are wrong please try again and if both
        username and password entered are correct than display message “welcome to the ssccs”.
*/

error_reporting(0);
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(isset($_POST["login"]))
    {
        if($username!="hetvi"&&$password!="hetvi")
        {
            echo"<script>alert('username  and password is wrong');</script>";
        }
        elseif($username!="hetvi")
        {
            echo"<script>alert('username is wrong');</script>";
     
        }
        elseif($password!="hetvi")
        {
            echo"<script>alert('password is wrong');</script>";   
        }
        elseif($username!="hetvi"&&$password!="hetvi")
        {
            echo"<script>alert('username  and password is wrong');</script>";
        }
        elseif($username=="hetvi" &&$password=="hetvi")
        {
            echo"<script>alert('welcome to the SSCCS');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <th colspan="2" align="center">LOGIN FORM</th>
            </tr>
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="username" id="101" value=" <?php echo $username;?> "></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" id="102" value="<?php echo $password;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="LOGIN" name="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>