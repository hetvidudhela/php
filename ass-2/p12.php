<?php
/*
    WAP to Enter item_no, item_name , item_Qty, item_price. Calculate the net_amount. If
    net_amount is less then 5000 then no discount(discount=0). If net_amount is more than 5000 then
    discount is 10%, if net_amount is more then 10000 then discount is 15% and also net amount is
    more then 15000 then 20% discount.
*/

    error_reporting(0);
    extract($_POST);
    if(isset($_POST["calc"]))
    {
        $ans=$item_qty*$item_price;
        if($ans>15000)
        {
            $dis=$ans*20/100;
            $net=$ans-$dis;
        }
        elseif($ans>10000)
        {
            $dis=$ans*15/100;
            $net=$ans-$dis;
        }
        elseif($ans>5000)
        {
           $dis=$ans*10/100;
            $net=$ans-$dis;
        }
        else
        {
            $net=$ans;
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
                <th align="center" colspan="2">find net amount</th>
            </tr>
            <tr>
                <td>enter item no</td>
                <td><input type="text" name="item_no" value="<?php echo $item_no; ?> "></td>
            </tr>
            <tr>
                <td>enter item name</td>
                <td><input type="text" name="item_name" value="<?php echo $item_name; ?>"></td>
            </tr>
            <tr>
                <td>enter item quantity</td>
                <td><input type="text" name="item_qty" value="<?php echo $item_qty; ?>"></td>
            </tr>
            <tr>
                <td>enter item price</td>
                <td><input type="text" name="item_price" value="<?php echo $item_price; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="calc" name="calc"></td>
            </tr>
            

            <tr>
                <td>net amount is</td>
                <td><input type="text" name="$net" value="<?php echo $net;?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>