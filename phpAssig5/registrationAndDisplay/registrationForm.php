<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>php registration form</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "users";
    
    session_start();
    $_SESSION['firstname'] = '';
    $_SESSION['lastname'] = '';
    $_SESSION['email'] = '';
    $_SESSION['dob'] = '';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   $msg = $firstnameError = $lastnameError = $emailError = $dobError = $genderError = $passwordError = '';
    function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validatePassword($password){
        return strlen($password) >= 8;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        if (isset($_POST['gender'])) {
            $gender = $_POST["gender"];
        }
        $password = $_POST["password"];

        if (empty($firstname)) {
            $firstnameError = "please enter first name";
        } else {
            $firstnameError = " ";
            $firstname = $_POST["firstName"];
            $_SESSION['firstname'] = $_POST["firstName"];
        }

        if (empty($lastname)) {
            $lastnameError = "please enter last name";
        } else {
            $lastnameError = " ";
            $_SESSION['lastname'] = $_POST["lastName"];
        }

        if (empty($email)) {
            $emailError = "please enter email";
        } else {
            if (!validateEmail($email)) {
                $emailError = "Invalid email address";
            } else {
                $emailError = "";
                $_SESSION['email'] = $_POST["email"];
            }

        }

        if (empty($dob)) {
            $dobError = "please enter date of birth";
        } else {
            $dobError = "";
            $_SESSION['dob'] = $_POST["dob"];
        }

        if (!isset($_POST['gender'])) {
            $genderError = "please enter gender<br>";
        } else {
            $genderError = '';
        }

        if (!validatePassword($password)) {
            $passwordError = "password length must be atleast 8 character";
        }

    }

    if (!empty($firstname) && !empty($lastname) && !empty($email) && validateEmail($email) && isset($_POST['gender']) && !empty($dob) && !empty($password) && validatePassword($password)) {
        $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, email, dob, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $email, $dob, $gender, $password);

        if($stmt->execute()){
            $msg = "registration successfull";
        }else{
            $msg = "registration not done ! please try again. ";
        }
        $stmt->close();
    }

    $conn->close();

    ?>
    <h3>Registration form using post method to store details in database</h3>
    <form action="#" method="POST">
        <div class="outerDiv">
            <div class="userInput">
                <p class="plabels"><label for="firstName">First Name:</label></p>
                <input type="text" id="firstName" name="firstName" value="<?php echo $_SESSION['firstname'] ; ?>" placeholder="Enter first name" />
            </div>
            <div class="errMsg">
                <?php echo $firstnameError; ?>
            </div>
        </div>
        <div class="outerDiv">
            <div class="userInput">
                <p class="plabels"><label for="lastName">Last Name:</label></p>
                <input type="text" id="lastName" name="lastName" value="<?php echo $_SESSION['lastname'] ; ?>" placeholder="Enter last name" />
            </div>
            <div class="errMsg">
                <?php echo $lastnameError; ?>
            </div>
        </div>
        <div class="outerDiv">
            <div class="userInput">
                <p class="plabels"><label for="email">Email:</label></p>
                <input type="" id="email" name="email" value="<?php echo $_SESSION['email'] ; ?>" placeholder="Enter email" />
            </div>
            <div class="errMsg">
                <?php echo $emailError; ?>
            </div>
        </div>
        <div class="outerDiv" id="dob">
            <div class="userInput">
                <p class="plabels"><label for="dob">Date Of Birth:</label></p>
                <input type="date" id="dob" name="dob" value="<?php echo $_SESSION['dob'] ; ?>"/>
            </div>
            <div class="errMsg">
                <?php echo $dobError; ?>
            </div>
        </div>
        <div class="outerDiv" id="gender">
            <div class="userInput">
                <p class="plabels"><label for="gender">Gender:</label></p>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            <div class="errMsg">
                <?php echo $genderError; ?>
            </div>
        </div>
        <div class="outerDiv">
            <div class="userInput">
                <p class="plabels"><label for="password">Password:</label></p>
                <input type="password" id="password" name="password" placeholder="Enter password" />
            </div>
            <div class="errMsg">
                <?php echo $passwordError; ?>
            </div>
        </div>
        <div class="btn">
            <button type="submit">Submit</button>
            <a href="displayDetails.php">Show users</a>
        </div>
    </form>
    <div>
        <?= $msg ?>
    </div>

</body>

</html>

