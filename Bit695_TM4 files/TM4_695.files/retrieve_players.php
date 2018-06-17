<?php
// BIT695 Web Technologies
// import a reusable function for connecting to DB
include 'common.php';

// SQL query string to select all columns from the table players
//NOTE: use of the asterix ins not recommend bu for the purposes of this suggested solution it is used
$sql_select = "SELECT * FROM players";

// assigned the query object to a variable
$R = $dbc->query($sql_select);

// if query object has more than 0 rows echo out to webpage
//inlcude proper output formatting as required
if ($R->num_rows > 0) {
 while ($r = $R->fetch_assoc()) {
  echo $r['firstname'].' '.$r['lastname']. "<br>";
 } 
}
// free the query object
$R->free();
// close connection to db
$dbc->close();
?>