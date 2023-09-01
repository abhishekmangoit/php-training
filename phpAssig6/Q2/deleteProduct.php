<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$servername = "localhost";
$username = "root";
$password = "Abhi1234$";
$dbname = "store";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $productName = $_GET['productName'];
    $sql = "DELETE FROM product WHERE productName = '$productName'";
    if ($conn->query($sql) === TRUE) {
        header("Location: displayProduct.php");
    } else {
        echo "Error in deleting record <br>" . $conn->error;
    }
}

$conn->close();

?>
