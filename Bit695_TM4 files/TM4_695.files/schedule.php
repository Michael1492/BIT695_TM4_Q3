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
	$Game  = $_GET["Game "];
	$Boardgame = $_GET["Boardgame "];
    $Venue  = $_GET["Available "];
    $Date = $_GET[" Date "];
   
	
//content and variable exits validation    
    if (isset($MemberID ) and !empty($MemberID )) $flag++;
    if (isset($Venue) and !empty($Venue)) $flag++;
    if (isset($Boardgame) and !empty($Boardgame)) $flag++;
    if (isset($Available  ) and !empty($Available  )) $flag++;	
	if (isset($Date ) and !empty($Date )) $flag++;

//contextual validation. ie email, typing, etc
    //suitable variable typeing to be added before executing the query
	//liberal use of mysql_real_escape_string, is_numeric, etc
	
//perfrom the query    
    if ($flag == 4) {
        $sql_insert = "INSERT INTO board_games (`memberID`, `game`, `boardgame`,`venue`,`date`) VALUES('NULL', '$MemberID','$Game','$Boardgame','$Venue','$Date)";
        $dbc->query($sql_insert);
    }
}

// close connection to db
$dbc->close();