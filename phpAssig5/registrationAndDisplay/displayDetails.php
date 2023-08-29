<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display Page</title>
</head>
<body>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors',1);
        $servername = "localhost";
        $username = "root";
        $password = "Abhi1234$";
        $dbname = "users";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `user`;";

        $details = $conn->query($sql);

        
        if ($details->num_rows > 0) {
    ?>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date Of Birth</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
    <?php while($row = $details->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["firstname"] ?></td>
            <td><?php echo $row["lastname"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["dob"] ?></td>
            <td><?php echo $row["gender"] ?></td>
        </tr>
       
    <?php } ?>
    </tbody>
    </table>
    <?php } else {
        echo "No User Found";
        }
        $conn->close();
    ?>
</body>
</html>