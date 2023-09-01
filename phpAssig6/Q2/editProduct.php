<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Edit Product Details</title>
</head>

<body>
    <?php
    $oldproductErr = $newproductErr = '';

    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT categoryName FROM category";
    $categories = $conn->query($sql);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST['oldproductName'])) {
            $oldproductErr = 'This field is required';
        } else {
            $oldproductErr = '';
            $oldproductName = $_POST['oldproductName'];
        }
        if (empty($_POST['newproductName'])) {
            $newproductErr = 'This field is required';
        } else {
            $newproductErr = '';
            $newproductName = $_POST['newproductName'];
            if (!empty($_POST['identifier'])) {
                $identifier = $_POST['identifier'];
            } else {
                $identifier = str_replace(' ', '-', strtolower($newproductName));
            }

            $category = $_POST['category'];
            $categoryArr = implode(", ", $category);
            $sql = "UPDATE product SET productName = '$newproductName', identifier = '$identifier', category='$categoryArr' WHERE productName = '$oldproductName'";
            echo $sql . "<br>";
            if ($conn->query($sql) === TRUE) {
                echo "Product updated successfully";
            } else {
                echo "Error in inserting record <br>" . $conn->error;
            }

            $conn->close();

        }
    }
    ?>
    <form method="post">
        <h3>Update Product Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="oldproductName">Old Product Name :</label>
                <input type="text" name="oldproductName" id="oldproductName" placeholder="Enter old product name">
            </div>
            <div class="errorMsg">
                <?= $oldproductErr ?>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="newproductName">New Product Name :</label>
                <input type="text" name="newproductName" id="newproductName" placeholder="Enter new product name">
            </div>
            <div class="errorMsg">
                <?= $newproductErr ?>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="identifier"> Identifier :</label>
                <input type="text" name="identifier" id="identifier" placeholder="Enter identifier">
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="category">Category :</label>
                <select name="category[]" id="category" multiple>
                    <?php while ($row = $categories->fetch_assoc()) { ?>
                        <option value="<?php echo $row['categoryName']; ?>"><?php echo $row['categoryName']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <button type="submit">Edit</button>
                <a href="displayProduct.php">Show Products</a>
            </div>
        </div>
    </form>

</body>

</html>