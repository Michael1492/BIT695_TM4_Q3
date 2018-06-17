<?php
// BIT695 Web Technologies
// import a reusable function for connecting to DB
include 'common.php';

$dbc->autocommit(TRUE);


// function to update player data dynamically based on form data
function UpdatePlayer($column, $value, $ID){
    global $dbc;

    // these are redundant, only purpose is for debugging
    $player_ID = $ID;
    $new_value = $value;
    $set_column = $column;
	
//contextual validation. ie email, typing, etc
    //suitable variable typeing to be added before executing the query
	//liberal use of mysql_real_escape_string, is_numeric, etc

    $sql_update = "UPDATE players set $set_column = $new_value WHERE memberID = $player_ID";
    $dbc->query($sql_update);
}

// only execute update if there is data
if(!empty($_GET)){
    UpdatePlayer($_GET['column'], $_GET['new_value'], $_GET['ID']);
}

// close connection to db
$dbc->close();