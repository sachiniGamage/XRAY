<?php
require('fpdf183/fpdf.php');
session_start();
     include 'config/config.php';
?>

<html>
<head>
        <title>Appointment Invoice</title>
    </head>
    <body>
        select invoice:
        <form method="get" action="invoice.php">
            <select name="app_id">
                <?php
                //show in voice list as option
                $query= mysqli_query($con,"select * from appointment");
                while($invoice=mysqli_fetch_array($query)){
                    echo "<option value='" .$invoice['app_id']."'>" .$invoice['app_id']."</option>";

                }

                ?>
            </select>
            <input type="submit" value="Generate">
        </form>
    </body>
    </html>






