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
    <title>Product Details</title>
</head>

<body>
    <?php
    $productErr = '';
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SHOW DATABASES LIKE 'store';";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) === 1) {
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

            } else {
                $sql = "CREATE DATABASE store";
                if ($conn->query($sql) === TRUE) {
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                } else {
                    echo "Error creating database: " . $conn->error;
                }
            }

    $sql= "SELECT DISTINCT categoryName FROM category";
    $categories = $conn->query($sql);
    echo "<pre>";
    

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST['productName'])) {
            $productErr = 'This field is required';
        } else {
            $productErr = '';
            $productName = $_POST['productName'];
            if (!empty($_POST['identifier'])) {
                $identifier = $_POST['identifier'];
            } else {
                $identifier = str_replace(' ', '-', strtolower($productName));
            }
            $category = $_POST['category'];
            $categoryArr = implode(", ", $category); 
            $sql = "SHOW TABLES LIKE '%product%';";
            $result = $conn->query($sql);
            if ($conn->query($sql)) {
                $sql = "INSERT INTO product (productname, identifier, category)VALUES ('$productName', '$identifier', '$categoryArr')";

                if ($conn->query($sql) === TRUE) {
                    echo "New product added successfully";
                } else {
                    echo "Error in inserting record <br>" . $conn->error;
                }
            } else {
                $sql = "CREATE TABLE `product` (`productName` varchar(50) NOT NULL, `identifier` varchar(50) NOT NULL)";
                $conn->query($sql);
                if ($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO product (productName, identifier)VALUES (`$productName`, `$identifier`)";
                    if ($conn->query($sql) === TRUE) {
                        echo "New product added successfully";
                    } else {
                        echo "Error in inserting record <br>" . $conn->error;
                    }

                } else {
                    echo "Error creating table: ";
                }
            }
            $conn->close();

        }
    }
    ?>
    <form method="post">
        <h3>Product Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="productName"> Product Name :</label>
                <input type="text" name="productName" id="productName" placeholder="Enter product name">
            </div>
            <div class="errorMsg">
                <?= $productErr ?>
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
                    <?php while($row = $categories->fetch_assoc()){ ?>
                            <option value="<?php echo $row['categoryName'];?>"><?php echo $row['categoryName'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <button type="submit">Add</button>
                <a href="displayProduct.php">Show Products</a>
            </div>
        </div>
    </form>
</body>

</html>
