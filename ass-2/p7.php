<?php
error_reporting(0);
    $per=$_POST["per"];
    $ans=$_POST["ans"];
    if(isset($_POST["grade"]))
    {
        if($per>=70)
        {
            $ans="A GRADE";

        }
        elseif($per>=60 &&$per<=69)
        {
            $ans="B GRADE";

        }
        elseif($per>=50 &&$per<=59)
        {
            $ans="C GRADE";
        }
        elseif($per>=40&&$per<=49)
        {
            $ans="D GRADE";

        }
        else
        {
            $ans="FAIL";
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
<form action="" method= "POST">
    <table border="1" align="center">
        <tr>
            <th colspan="2" align="center">find grade</th>
        </tr>
        <tr>
            <td>enter percentage</td>
            <td><input type="text" name="per" id="101" value="<?php echo $per?> "></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="grade" value="grade"></td>
        </tr>
        <tr>
            <td>grade is</td>
            <td><input type="text" name="ans" id="102" value="<?php echo $ans?>"></td>
        </tr>
    </table>
</form>    
</body>
</html>