<?php
// BIT695 Web Technologies
// keep commonly used variables in one place to avoid repeating code
$MemberID = '';
$FirstName = '';
$Surname = '';
$EmailAddress = '';
$PhoneNumber  = '';
$Password = '';
$Boardgame = '';
$Position = '';
$Notes = '';
$Date = '';
$Event = '';
$Available = '';
$Day  = '';
$Game  = '';
$Venue  = '';
$sql_insert = '';
$sql_select = '';
$sql_update = '';
$sql_delete = '';

$dbc = NULL;

function connectDB(){
    $db = new mysqli('127.0.0.1', 'root', 'root', 'bit695');
    if ($db->connect_errno) {
        echo "Error: Failed to make a MySQL connection, here is why: \n";
        echo "Errno: " . $db->connect_errno . "\n";
        echo "Error: " . $db->connect_error . "\n";
        exit;
        }
    return $db;
    }

$dbc = connectDB();