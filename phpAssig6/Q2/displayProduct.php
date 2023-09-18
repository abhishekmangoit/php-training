<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Products Page</title>
</head>

<body>
    <h3>Products Table</h3>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `product`;";
    $result = $conn->query($sql);
    if ($conn->query($sql)) {
        ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Identifier</th>
                    <th>Category</th>
                    <th>Edit Product</th>
                    <th>Delete Product</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["productName"] ?>
                        </td>
                        <td>
                            <?php echo $row["identifier"] ?>
                        </td>
                        <td>
                            <?php echo $row["category"] ?>
                        </td>
                        <td>
                            <?php echo "<a href='editProduct.php?id=" . $row['id'] . "'>Edit</a>"; ?>
                        </td>
                        <td>
                            <?php echo "<a href='deleteProduct.php?id=" . $row["id"] . "'>Delete</a>"; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "No product is found";
    }
    ?>
    <a href="index.php">Back</a>
</body>

</html>
