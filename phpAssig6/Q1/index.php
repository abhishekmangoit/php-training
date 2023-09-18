<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="first.css">
    <title>Category Details</title>
</head>

<body>
    <?php
    $categoryErr = $msg ='';
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

            $sql = "SHOW TABLES LIKE '%category%';";
            $result = $conn->query($sql);
            if ($conn->query($sql)) {
                $sql = "INSERT INTO category (categoryName, identifier)VALUES ('$categoryName', '$identifier')";

                if ($conn->query($sql) === TRUE) {
                    $msg = "New category added successfully";
                } else {
                    $msg = "Error in inserting record <br>" . $conn->error;
                }
            } else {
                $sql = "CREATE TABLE `category` (`categoryName` varchar(50) NOT NULL,       `identifier` varchar(50) NOT NULL) ;";
                if ($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO category (categoryName, identifier)VALUES ('$categoryName', '$identifier')";
                    if ($conn->query($sql) === TRUE) {
                        $msg =  "New category added successfully";
                    } else {
                        $msg = "Error in inserting record <br>" . $conn->error;
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
        <h3>Category Details Form</h3>
        <div class="inputField">
            <div class="inputBox">
                <label for="categoryName"> Category Name :</label>
                <input type="text" name="categoryName" id="categoryName" placeholder="Enter category Name">
            </div>
            <div class="errorMsg">
                <?= $categoryErr ?>
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
