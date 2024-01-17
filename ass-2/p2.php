<?php
/*
        write a program to enter any one number and check this number is even and odd.

*/
error_reporting(0);
    $a=$_POST["no1"];
    if ($a %2==0)
    {
        $ans="$a  is even";
    }
    else
    {
        $ans="$a  is odd";
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
    <form action=" " method="POST">
        <table border="1" align="center">
            <tr>
                    <th colspan="2" align="center">find num is odd or even </th>
            </tr>

            <tr>
                    <td>enter no</td>
                    <td><input type="text" name="no1" value="<?php echo $a?> "></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="check" value="check"></td>
            </tr>

            <tr>
                <td>ans is </td>
                <td><input type="text" name="ans" value="<?php  echo $ans?> "></td>
            </tr>
</table>
</form>
</body>
</html>