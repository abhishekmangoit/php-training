<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="first.css">
    <title>Categories</title>
</head>

<body>
    <h3>Categories Table</h3>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `category`;";
    $result = $conn->query($sql);
    if ($conn->query($sql)) {
        ?>
        <table>
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Identifier</th>
                    <th>Edit Category</th>
                    <th>Delete Category</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["categoryName"] ?>
                        </td>
                        <td>
                            <?php echo $row["identifier"] ?>
                        </td>
                        <td><?php echo "<a href='editCategory.php?categoryName=" . $row['categoryName'] . "'>Edit</a>"; ?></td>
                        <td><?php echo "<a href='deleteCategory.php?categoryName=" . $row["categoryName"] . "'>Delete</a>"; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "error";
    }
    ?>
</body>

</html>
