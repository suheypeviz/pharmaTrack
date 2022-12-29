<?php

$dbname="pharmatrack";

$connection = new PDO("mysql:host=localhost;
                    dbname=$dbname;
					        charset=utf8", "root", "");
$connection->exec("SET NAMES utf8");

// PDO with attributes
// closing connection (?)
?>
