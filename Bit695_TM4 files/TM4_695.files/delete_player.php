<?php
// BIT695 Web Technologies
// import a reusable function for connecting to DB
include 'common.php';

function DeleteEntry($ID){
    global $dbc;
	
//insert valid variable content validation	
    if (empty($ID)) exit; //incomplete, has no error messages
    $sql_delete = "DELETE from players WHERE memberID = $ID";
    $dbc->query($sql_delete);
}

// only execute delete if there is player ID present
if(!empty($_GET)){
    DeleteEntry($_GET['ID']);
}

// close connection to db
$dbc->close();