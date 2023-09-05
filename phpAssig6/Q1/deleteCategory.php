<?php
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $categoryName = $_GET['categoryName'];
        $sql = "DELETE FROM category WHERE categoryName = '$categoryName'";
        if ($conn->query($sql) === TRUE) {
            header("Location: displayCategory.php");
        } else {
            echo "Error in deleting record <br>" . $conn->error;
        }
    }

    $conn->close();

?>
