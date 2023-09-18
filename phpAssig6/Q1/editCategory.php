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
    $id = $_GET['id'];
    $servername = "localhost";
            $username = "root";
            $password = "Abhi1234$";
            $dbname = "store";
            $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
    $sql = "SELECT * from category where id='$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $name= $row['categoryName'];
        $identifier = $row['identifier'];
    }
    $categoryErr = $msg = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST['categoryName'])) {
            $categoryErr = 'This field is required';
        } else {
            $categoryErr = '';
            $categoryName = $_POST['categoryName'];
            if (!empty($_POST['identifier'])) {
                $identifier = $_POST['identifier'];
            } else {
                $identifier = str_replace(' ', '-', strtolower($categoryName));
            }
            
           
            $sql = "UPDATE category SET categoryName = '$categoryName', identifier = '$identifier' WHERE id = '$id'";
            if ($conn->query($sql) === TRUE) {
                $msg = " category added successfully";
            } else {
                $msg = "Error in inserting record <br>" . $conn->error;
            }

            $conn->close();

        }
    }
    ?>
    <form method="post">
        <h3>Category Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="categoryName"> Category Name :</label>
                <input type="text" name="categoryName" id="categoryName" value="<?= $name ?>" placeholder="Enter  category Name">
            </div>
            <div class="errorMsg">
                <?= $categoryErr ?>
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
                <button type="submit">Add</button>
                <a href="displayCategory.php">Show Categories</a>
            </div>
        </div>
    </form>
    <div class="msg">
        <?= $msg ?>
    </div>
   
</body>

</html>
