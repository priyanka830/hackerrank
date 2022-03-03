<?php
$UserId = filter_input(INPUT_POST, 'UserId');
$EnterPassword = filter_input(INPUT_POST, 'EnterPassword');
if (!empty($UserId)){
if (!empty($EnterPassword)){
$host = "localhost";
$dbUserId = "root";
$dbEnterPassword = "";
$dbname = "youtube";
// Create connection
$conn = new mysqli ($host, $dbUserId, $dbEnterPassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (UserId, EnterPassword)
values ('$UserId','$EnterPassword')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "EnterPassword should not be empty";
die();
}
}
else{
echo "UserId should not be empty";
die();
}
?>