<?php
error_reporting(0);
    $a=$_POST["no1"];
    $b=$_POST["no2"];
   if(isset($_POST["min"]))
    {
        if($a<$b)
        {
           $ans=$a;  
         }
        else
        {
               $ans=$b;
        }
    }
    if (isset($_POST["max"]))
    {
        if($a>$b)
        {
                $ans2=$a;
        }
        else
        {
               $ans2=$b;
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
    <form action=" " method="POST">
        <table border="1" align="center">
            <tr>
                <th colspan="2" align="center">findout min and max num</th>
            </tr>

            <tr>
                    <td>enter no 1</td>
                    <td><input type="text" name="no1" value="<?php echo "$a"?> "></td>
            </tr>

            
            <tr>
                    <td>enter no 2</td>
                    <td><input type="text" name="no2" value=" <?php echo "$b"?> "></td>
            </tr>

            
            <tr>
                    <td colspan="2" align="center"><input type="submit" value="min" name="min"><input type="submit" value="max" name="max"></td>

            </tr>
            <tr>
                    <td>min num  is </td>
                    <td><input type="text" name="min" value="<?php echo $ans?> "></td>
            </tr>
            <tr>   
              <td>max num  is </td>
            <td><input type="text" name="max" value="<?php echo $ans2?> "></td>
    </tr>


</table>
</form>
</body>
</html>