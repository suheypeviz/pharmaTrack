<?php
$navbar="nav.php";
?>

<?php
require_once("connect.php");
?>

<html>
    <head>
        <title>Health Info</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!--Header-->
        <h1 id="main_header" href="index.php">pharmaTRACK-Health Info</h1>
        <!--Navbar-->
        <div class="navbar">
            <?php include($navbar);?>
        </div>
<table border="0">
<tr>
<td><p>Drug Name</p></td>
<td><p>Usage</p></td>
<td><p>Rate</p></td>
<td><p>Prescripted</p></td>
</tr>

<?php
$quer="select * from drugs";
$eq=$connection->query($quer);
foreach($eq as $values=>$dataset) {
   ?>

   <tr>
   <td><?php echo $dataset['drug_name'];?></td>
   <td><?php echo $dataset['daily'];?></td>
   <td><?php echo $dataset['often'];?></td>
   <td><?php echo $dataset['pres'];?></td>
   </tr>

<?php
   }
?>
    </body>
</html>

<tr>
<td><a href="drugs.php">Add Another</a></td>
</tr>
</table>
