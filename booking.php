<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "hotelbooking"
);

if ($conn->connect_error){
    die("Connection Failed");
}

$BookingID = $_POST['BookingID'];
$Guest_ID = $_POST['Guest_ID'];
$RoomNo = $_POST['RoomNo'];
$BookingDate = $_POST['BookingDate'];
$Check_In_Time = $_POST['Check_In_Time'];
$Check_Out_Time = $_POST['Check_Out_Time'];

$sql = "INSERT INTO booking11
(BookingID, Guest_ID, RoomNo, BookingDate, Check_In_Time, Check_Out_Time)

VALUES(
'$BookingID',
'$Guest_ID',
'$RoomNo',
'$BookingDate',
'$Check_In_Time',
'$Check_Out_Time'
)";

if($conn->query($sql) == TRUE){

    header("Location: pay.html");
    exit();

}
else{

    echo "Error: " . $conn->error;

}

$conn->close();

?>