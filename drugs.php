<?php
$navbar="nav.php";
?>

<?php
require_once("connect.php");
?>

<html>
    <head>
        <title>Drugs</title>
        <link rel="stylesheet" href="styles.css">
    </head>
            <!--Header-->
        <h1 id="main_header" href="index.php">pharmaTRACK-Add Drugs</h1>
        <!--Navbar-->
        <div class="navbar">
            <?php include($navbar);?>
        </div>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="0">
<thead>Add your Drug Informaton</thead>
<tr>
<td>Drug Name:</td><td><input type="text" name="drug_name" required="required" placeholder="Drug Name"></td>
</tr>
<tr>
<td>Daily: </td><td><input type="text" name="daily" required="required" placeholder="Usage, daily,etc"></td>
</tr>
<tr>
<td>How Many:</td><td><input type="text" name="often" required="required" placeholder="How many"></td>
</tr>
<tr>
<td>Prescripted:</td><td><input type="text" name="pres" required="required" placeholder="Yes or No"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="add_drug"></td>
</table>
</form>
 </body>
</html>
<?php
   if(isset($_REQUEST['add_drug'])){
	   $name=$_REQUEST['drug_name'];
	   $daily=$_REQUEST['daily'];
	   $often=$_REQUEST['often'];
	   $pres=$_REQUEST['pres'];
      //echo "$adi,$soyadi";
	   $quer="insert into drugs
	    (drug_name,daily,often,pres)
      values('$name','$daily','$often','$pres')
	   ";
	   $exec_query=$connection->query($quer);
	   if($exec_query){
		  header("location:health_stat.php");
		  }
		  else
		  {
			  echo "Error Occured";
			}
   }
?>
