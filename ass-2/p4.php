<?php

/*
        WAP to check whether the no. is positive, negative or zero? (Using if else ladder)

*/
error_reporting(0);

    $a=$_POST["no"];
    if($a>0)
    {
        $ans="$a is positive";

    }
    else if($a==0)
    {
        $ans="num is zero";
    }
    else{
        $ans="$a is negative";
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
                    <td>enter any no</td>
                    <td><input type="text" name="no" value="<?php echo $a?> "></td>
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
