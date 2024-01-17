<?php
/* WAP to check whether the no. is divisible by 2, 3, 5 or not? (Using nested if)

*/
error_reporting(0);
    $a=$_POST["no"];
    if($a%2==0)
    {   
        $ans="$a is divisible by 2";
        if($a%3==0)
        {
            $ans="$a is divisible by 2,3";
            if ($a%5==0)
            {
                $ans="$a is divisible by 2,3,5";
            }
       
        }
       
    }
    elseif($a%3==0&& $a%5==0)
    {
        $ans="$a is divisible by 3,5";
    }
    elseif($a%3==0)
    {
        $ans="$a is divisible by 3";
    }
    else{
        $ans="$a is divisible by 5";
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
                    <th colspan="2" align="center">findout num is divisible by 2,3 or 5 </th>
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
