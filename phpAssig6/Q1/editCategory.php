<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="first.css">
    <title>Edit Category Details</title>
</head>

<body>
    <?php
    $oldcategoryErr = $newcategoryErr = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST['oldcategoryName'])) {
            $oldcategoryErr = 'This field is required';
        } else {
            $oldcategoryErr = '';
            $oldcategoryName = $_POST['oldcategoryName'];
        }
        if (empty($_POST['newcategoryName'])) {
            $newcategoryErr = 'This field is required';
        } else {
            $newcategoryErr = '';
            $newcategoryName = $_POST['newcategoryName'];
            if (!empty($_POST['identifier'])) {
                $identifier = $_POST['identifier'];
            } else {
                $identifier = str_replace(' ', '-', strtolower($newcategoryName));
            }
            $servername = "localhost";
            $username = "root";
            $password = "Abhi1234$";
            $dbname = "store";
            $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
           
            $sql = "UPDATE category SET categoryName = '$newcategoryName', identifier = '$identifier' WHERE categoryName = '$oldcategoryName'";
            if ($conn->query($sql) === TRUE) {
                echo "New category added successfully";
            } else {
                echo "Error in inserting record <br>" . $conn->error;
            }

            $conn->close();

        }
    }
    ?>
    <form method="post">
        <h3>Update Category Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="oldcategoryName">Old Category Name :</label>
                <input type="text" name="oldcategoryName" id="oldcategoryName" placeholder="Enter old category Name">
            </div>
            <div class="errorMsg">
                <?= $oldcategoryErr ?>
            </div>
        </div>
        <div class="inputField">
            <div class="inputBox">
                <label for="newcategoryName">New Category Name :</label>
                <input type="text" name="newcategoryName" id="newcategoryName" placeholder="Enter new category Name">
            </div>
            <div class="errorMsg">
                <?= $newcategoryErr ?>
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
                <button type="submit">Edit</button>
                <a href="displayCategory.php">Show Categories</a>
            </div>
        </div>
    </form>
   
</body>

</html>
