
<?php require __DIR__ . "/../data.php";

header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *");

echo json_encode($database);

?>