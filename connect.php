<?php
$name = filter_input(INPUT_POST, 'name');
$phoneno = filter_input(INPUT_POST, 'phoneno');
$chemeid = filter_input(INPUT_POST, 'schemeid');
if (!empty($name)){
if (!empty($phoneno)){
if(!empty($schemeid)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "lsgd";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO beneficiaries (name, phoneno, schemeid)
values ('$name','$phoneno','$schemeid')";
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
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
else {
echo "Fiels should not be empty";
die();
}
?>
