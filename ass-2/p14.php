<?php
    error_reporting(0);
    extract($_POST);
    
    if(isset($_POST["calc"]))
    {
        switch($opearator)
        {
            case "add":
                $ans=$no1+$no2;
            break;

            case "sub":
                $ans=$no1-$no2;
            break;

            case "mul":
                $ans=$no1*$no2;
            break;

            case "div":
                $ans=$no1/$no2;
            break;

            default:
            break;

        }
        echo $ans;
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
                <th colspan="2" align="center">arithematic operation</th>
            </tr>

            <tr>
                <td>enter 1st number</td>
                <td><input type="text" name="no1" value="<?php echo $no1;?>"></td>
            </tr>

            <tr>
                <td>enter 2nd number</td>
                <td><input type="text" name="no2" value="<?php echo $no2;?>"></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    addition<input type="radio" name="opearator" value="add"></td>
</tr>
            <tr>
                <td colspan="2" align="center">
                substarction<input type="radio" name="opearator" value="sub">
</td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                multiplication<input type="radio" name="opearator" value="mul"></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                division
                   <input type="radio" name="opearator" value="div"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit"  name="calc" value="calc"></td>
            </tr>
            <tr>
                <td>answer is :</td>
                <td><input type="text" name="ans" value="<?php echo $ans?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>