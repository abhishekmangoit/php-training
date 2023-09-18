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
    $msg = $productErr = '';

    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "store";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $allCategories = [];
    $sql = "SELECT * FROM category";
    $categories = $conn->query($sql);
    while($row = $categories->fetch_assoc() ){
        $allCategories[] = $row;
    }
    $sql = "SELECT category FROM product where id = '$id'";
    $products = $conn->query($sql);
    while($row = $products->fetch_assoc() ){
        $proCategory = $row['category'];
    }
$arr = explode(',', $proCategory);
$sql = "SELECT * from product where id='$id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    $name= $row['productName'];
    $identifier = $row['identifier'];
}
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
            $categoryArr = implode(",", $category);
            $sql = "UPDATE product SET productName = '$productName', identifier = '$identifier', category='$categoryArr' WHERE id = '$id'";
            echo $sql . "<br>";
            if ($conn->query($sql) === TRUE) {
                $msg = "Product updated successfully";
            } else {
                $msg = "Error in inserting record <br>" . $conn->error;
            }

            $conn->close();

        }
    }
    ?>
    <form method="post">
        <h3> Product Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="productName">Product Name :</label>
                <input type="text" name="productName" id="productName" value="<?= $name ?>" placeholder="Enter  product name">
            </div>
            <div class="errorMsg">
                <?= $productErr ?>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="identifier"> Identifier :</label>
                <input type="text" name="identifier" id="identifier" value="<?= $identifier ?>" placeholder="Enter identifier">
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="category">Category :</label>
                <select id="categoryinput" name="category[]" id="category" multiple>
                    <?php 
                        foreach ($allCategories as $category) {
                            $categoryId = $category['id'];
                            $categoryName = $category['categoryName'];
                            $isSelected = in_array($categoryId, $arr) ? 'selected' : '';
                            echo "<option value=\"$categoryId\" $isSelected>$categoryName</option>";
                        }
                    ?>
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
    <div class="msg">
        <?= $msg ?>
    </div>

</body>

</html>

