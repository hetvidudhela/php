<?php
    /*    WAP to enter Emp_id, Emp_name, Emp_Basic_ Salary and calculate the
        Ta(9%),Da(8.5%),HRA(7.5%),Tax(11%), and PF(12%). Also calculate the Net_salary.
        If Net_salary is more than 15000 and calculate 15% bonus + basic_salary
        If Net_Salary is more than 25000 and calculate 20% bonus + basic_salary.
        If net_salary is more than 35000 and calculate 30% bonus_basic_salary.
        (Display emp_id, emp_salary, TA, DA, HRA, PF, TAX and Net salary in tabular format).*/
error_reporting(0);
    extract($_POST);
    if(isset($_POST["netsalary"]))
    {
        $ta=$emp_sal*9/100;
        $da=$emp_sal*8.5/100;
        $hra=$emp_sal*7.5/100;
        $tax=$emp_sal*11/100;
        $pf=$emp_sal*12/100;
        $tot=$emp_sal+$ta+$da+$hra+$tax-$pf;

        if($tot>35000)
        {
            $bon=$tot*30/100;
            $net_sal=$tot+$bon;
        }
        elseif($tot>25000)
        {
            $bon=$tot*20/100;
            $net_sal=$tot+$bon;   
        }
        elseif($tot>15000)
        {
            $bon=$tot*15/100;
            $net_sal=$tot+$bon;
        }
        else
        {
            $net_sal=$tot;
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
                        <th align="center" colspan="2"> find net salary</th>
                    </tr>
                    <tr>
                        <td>enter employee id</td>
                        <td><input type="text" name="emp_id" value="<?php echo $emp_id;?>"></td>
                    </tr>
                    <tr>
                        <td>enter employee name</td>
                        <td><input type="text" name="emp_name" value="<?php echo $emp_name;?>"></td>
                    </tr>
                    <tr>
                        <td>enter basic salary</td>
                        <td><input type="text" name="emp_sal" value="<?php echo $emp_sal;?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit"   name="netsalary" value="netsalary"></td>
                    </tr>
               
                    <tr>
                        <td>net salary is</td>
                        <td><input type="text" name="net_sal"  value="<?php echo $net_sal;?>"></td>
                    </tr>
                </table>
            </form>
        </body>
        </html>

