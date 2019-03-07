<?php 
session_start();
$fullNameValue = "";
$totalValue2 = "";
/* 
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;



/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body style='background-color: antiquewhite'>
        <div class="form">
            <form name="Details" method="post" action="EBusiness3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b><u>Enter in your details below</u></b></td>
                        </tr>
                        
                        <br>
                        <br>
                        
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="tel" id="txtNum" name="txtNum" 
                                       pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'
                                       required>
                                <span class='note'>(Format: 123-456-7890)</span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Email Address</td>
                            <td><input type='text' id='txtEmail' name='txtEmail' value='' />
                            </td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="digit" id="txtPassword" name="txtPassword" 
                                       pattern='[0-9][0-9][0-9][0-9]'
                                       required>
                                <span class='note'>(Password must consist of 4 digits)</span>
                            </td>
                        </tr>
                        
                        
                        <tr>
    
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
    
        <center>
                <input type="submit" name="btnContinue" id="btnCalc" onclick="" value="Continue"/>
                
        </center 
        </div>
        </form>
    </body>
</html>