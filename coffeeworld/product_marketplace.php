<?php

// Create connection
$conn = new mysqli("iamvivek.ipagemysql.com","renup","renu123","renu");

// Check connection
if (!$conn) {
    echo 'dying in here-->';
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Product";
$result = mysqli_query($conn,$sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
    exit;
}

if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

$rows = array();
while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
}
header("Content-type:application/json");
echo json_encode($rows);


mysqli_free_result($result);

?>