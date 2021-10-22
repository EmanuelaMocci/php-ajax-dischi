<!-- 1) Creo il collegamento con il database -->
<?php require __DIR__ . "/../data.php";

header("Content-Type: application/json");

echo json_encode($database);

?>