<?php
/*
            write a program to enter any one year and check this year is leap year or not.

*/
error_reporting(0);
        $a=$_POST["year"];
        if($a%4==0)
        {
            $ans="$a is leap year ";
        }
        else
        {
            $ans="$a is not leap year";
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
                    <th colspan="2" align="center">findout entered year is leap or not  </th>
            </tr>

            <tr>
                    <td>enter any year</td>
                    <td><input type="text" name="year" value="<?php echo $a?> "></td>
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
