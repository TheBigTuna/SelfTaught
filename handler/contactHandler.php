<?php
include("../resources/connection.php"); 
session_start();

// Checks for the largest ID available
$FetchID = "SELECT max(ID) AS ID FROM omoore94_growthbook.contactsubmit";        
$FetchIDResult = mysqli_query($conn, $FetchID);
while($row = mysqli_fetch_assoc($FetchIDResult)){
    $ID = $row['ID'];
}

$ID++;
$ID = mysqli_real_escape_string($conn, $ID);


$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$PhoneNumber = mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
$Subject = mysqli_real_escape_string($conn, $_POST['Subject']);
$Message = mysqli_real_escape_string($conn, $_POST['Message']);
$Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));

$InsertMessage = "INSERT INTO omoore94_growthbook.contactsubmit (ID, Name, Email, PhoneNumber, Subject, Message, Timestamp) VALUES ('$ID', '$Name', '$Email', '$PhoneNumber', '$Subject', '$Message', '$Timestamp');";  
$InsertMessageResult = mysqli_query($conn, $InsertMessage);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>