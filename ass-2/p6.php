<?php
error_reporting(0);
    extract($_POST);
    if(isset($_POST["max"]))
    {
            if($no1>=$no2)
            {
                if($no1>=$no3)
                {
                    $ans=$no1." is maximum number";

                }
                else
                {
                    $ans=$no3." is maximum number";
                }
                

            }
            else
            {
                if($no2>=$no3)
                {
                    $ans=$no2." is maximum number";
                }
                else
                {
                    $ans=$no3." is maximum number";
                }
            }
            
    }
    if(isset($_POST["min"]))
    {
            if($no1<=$no2)
            {
                if($no1<=$no3)
                {
                    $ans=$no1." is minimum number";

                }
                else
                {
                    $ans=$no3." is minimum number";
                }
                

            }
            else
            {
                if($no2<=$no3)
                {
                    $ans=$no2." is minimum number";
                }
                else
                {
                    $ans=$no3." is minimum number";
                }
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
                    <th colspan="2" align="center">findout min and max num </th>
            </tr>

            <tr>
                    <td>enter  no1</td>
                    <td><input type="text" name="no1" value="<?php echo $no1?> "></td>
            </tr>

            <tr>
                    <td>enter  no2</td>
                    <td><input type="text" name="no2" value="<?php echo $no2?> "></td>
            </tr>
            <tr>
                    <td>enter no3</td>
                    <td><input type="text" name="no3" value="<?php echo $no3?> "></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="max" value="max">
                    <input type="submit" name="min" value="min">
            </td>
            </tr>

            <tr>
                <td>ans is  </td>
                <td><input type="text" name="ans" value="<?php  echo $ans?> "></td>
            </tr>
</table>
</form>
</body>
</html>