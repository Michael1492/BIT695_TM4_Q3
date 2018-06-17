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
	$Boardgame = $_GET["Boardgame "];
    $Position  = $_GET["Position "];
    $Notes  = $_GET["Notes "];
    $Date = $_GET["Date"];
    $Event  = $_GET["Event "];
	
//content and variable exits validation    
    if (isset($MemberID ) and !empty($MemberID )) $flag++;
    if (isset($Boardgame) and !empty($Boardgame)) $flag++;
    if (isset($Position) and !empty($Position)) $flag++;
    if (isset($Notes) and !empty($Notes)) $flag++;
    if (isset($Date ) and !empty($Date )) $flag++;	
	if (isset($Event ) and !empty($Event )) $flag++;

//contextual validation. ie email, typing, etc
    //suitable variable typeing to be added before executing the query
	//liberal use of mysql_real_escape_string, is_numeric, etc
	
//perfrom the query    
    if ($flag == 4) {
        $sql_insert = "INSERT INTO board_games (`memberID`, `boardgame`, `position`, `notes``, `date`,`event`) VALUES('NULL', '$MemberID','$BoardGame','$Position','$Notes','$ Date',' $Event')";
        $dbc->query($sql_insert);
    }
}

// close connection to db
$dbc->close();