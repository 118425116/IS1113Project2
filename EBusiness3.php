<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                color:#000;
                text-align: center;
            }
            h3 {
                color: black;
                text-align: center;
            }
            img { 
                width: 100%;
                height: auto;
                opacity: 0.3;
                }
            .center {
                position: absolute;
                left: 0;
                top: 25%;
                width: 100%;
                text-align: center;
                font-size: 20px;
                }
        </style>
        <title>Receipt</title>
    </head>
<body>
    <img src="ebusinessimage.png" alt="Cinque Terre" width="1600" height="300">
   <div class='center'>
       <h1><u>Receipt</u></h1>
<!--    //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ".$fullNameValue."."; 
echo " <br>";
echo "The total value is : ".$totalValue2.".";
?>

<br>
<br>

<h3><i>Thank you for shopping at McElligott's!</i></h3>

   </div>

</body>
</html> 