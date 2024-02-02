<?php
error_reporting(0);
$city=$_POST["city"];
if(isset($_POST["answer"]))
{
    switch($city)
    {
        case "gandhinagar":
            echo "<script>alert('wrong answer');</script>";
        break;

        case "delhi":
            echo "<script>alert('right answer');</script>";
        break;

        case "utter pradesh":
            echo "<script>alert('wrong answer');</script>";
        break;

        case "Gujarat":
            echo "<script>alert('wrong answer');</script>";
        break;

        default:
        break;
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
                <th colspan="2" align="center">give question answer</th>
            </tr>

            <tr>
                <td colspan="2" align="center"><b>what is capital of india ?<b></td>
            </tr>

            <tr>
                <td> <input type="radio" name="city"  value="gandhinagar" id="">gandhinagar</td>
            </tr>
            <tr>
                <td> <input type="radio" name="city"  value="delhi" id="">delhi</td>
</tr>
            <tr>
                <td> <input type="radio" name="city" value="utter pradesh" id="">utter pradesh</td>
</tr>
                <tr>
                <td> <input type="radio" name="city" value="Gujarat" id="">Gujarat</td>
           </tr>
           <tr>
                <td colspan="2" align="center"><input type="submit" value="answer" name="answer"></td>
</tr>
        </table>
    </form>
</body>
</html>