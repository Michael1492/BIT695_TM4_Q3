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
	$Day  = $_GET["Position "];
	$Boardgame = $_GET["Boardgame "];
    $Assigned  = $_GET["Assigned "];
    $Date = $_GET[" Date "];
   
	
//content and variable exits validation    
    if (isset($MemberID ) and !empty($MemberID )) $flag++;
    if (isset($Firstname) and !empty($Firstname)) $flag++;
    if (isset($Day) and !empty($Day)) $flag++;
    if (isset($Boardgame) and !empty($Boardgame)) $flag++;
    if (isset($Assigned  ) and !empty($Assigned  )) $flag++;	
	if (isset($Date ) and !empty($Date )) $flag++;

//contextual validation. ie email, typing, etc
    //suitable variable typeing to be added before executing the query
	//liberal use of mysql_real_escape_string, is_numeric, etc
	
//perfrom the query    
    if ($flag == 4) {
        $sql_insert = "INSERT INTO board_games (`memberID`, `firstname`, `day``, `boardgame`,`assigned`,`date`) VALUES('NULL', '$MemberID','$Firstname','$Day','$Boardgame','$Assigned','$Date)";
        $dbc->query($sql_insert);
    }
}

// close connection to db
$dbc->close();