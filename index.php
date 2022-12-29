<?php
$navbar="nav.php";
?>

<?php
require_once("connect.php");
?>

<html>
    <head>
        <title>pharmaTRACK</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="index_body">
        <!--Header-->
        <h1 id="main_header" href="index.php">pharmaTRACK</h1>
        <!--Navbar-->
        <div class="navbar">
            <?php include($navbar);?>
        </div>
        <br></br>
        <!--Content-->
        <h3>Drugs</h3>
            <p>Add your drug information</p>
                <a href="drugs.php" class="content_a">Add Drugs</a>
        <h3>Health Status</h3>
            <p>List of added drugs</p>
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

<!--center all (?)-->
