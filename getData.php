<?php
header('Content-Type: application/json');

require_once('config.php');

$sqlQuery = "SELECT * From event";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

// echo json_encode($data);
echo "hello";
?>
