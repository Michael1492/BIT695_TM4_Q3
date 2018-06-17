<?php
// BIT695 Web Technologies
// import a reusable function for connecting to DB
include 'common.php';

// turn on autocommit to ensure data is inserted into DB after query is finished
$dbc->autocommit(TRUE);

// check to ensure the http metho does not hold blank data to avoid add blank data into db
if(!empty($_GET)){
    $flag = 0;
	$MemberID  = $_GET["MemberID  "];
    $Firstname  = $_GET["Firstname "];
    $Surname = $_GET["Surname"];
    $EmailAddress = $_GET["EmailAddress"];
    $PhoneNumber  = $_GET["PhoneNumber "];
	$Password  = $_GET["Password "];
//content and variable exits validation    
    if (isset($MemberID ) and !empty($MemberID )) $flag++;
    if (isset($Firstname) and !empty($Firstname)) $flag++;
    if (isset($Surname) and !empty($Surname)) $flag++;
    if (isset($EmailAddress) and !empty($EmailAddress)) $flag++;
    if (isset($PhoneNumber ) and !empty($PhoneNumber )) $flag++;	
	if (isset($Password ) and !empty($Password )) $flag++;

//contextual validation. ie email, typing, etc
    //suitable variable typeing to be added before executing the query
	//liberal use of mysql_real_escape_string, is_numeric, etc
	
//perfrom the query    
    if ($flag == 4) {
        $sql_insert = "INSERT INTO players (`memberID`, `firstname`, `lastname`, `email`, `phone`,`password`) VALUES('NULL', '$MemberID','$Firstname','$Surname','$EmailAddress','$PhoneNumber','$Password')";
        $dbc->query($sql_insert);
    }
}

// close connection to db
$dbc->close();