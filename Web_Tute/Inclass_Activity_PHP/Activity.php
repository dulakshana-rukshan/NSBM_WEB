<?php
if (isset($_POST["submit"])) {

    $name = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $gender = $_POST["gender"] ?? "Not selected";

    $conditions = isset($_POST["conditions"])
        ? "Accepted"
        : "Not Accepted";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
        }

        fieldset{
            width: 700px;
            margin: auto;
        }

        legend{
            font-size: large;
        }

    </style>

    <h1>Enter Your Details</h1>
    <form method="post">
        <fieldset>
            <legend>Personal Information</legend><br>

            <label>Name :</label>
            <input type="text" name="uname" > <br><br>

            <label>Email :</label>
            <input type="email" name="email" ><br><br>

            <label>Passwrod :</label>
            <input type="password" name="password"><br><br>

            <label>Confirm Password :</label>
            <input type="password" name=confirm_password><br><br>

            <label>Gender :</label><br>
            <input type="radio" name="gender" value="male"> <label>Male</label><br>
            <input type="radio" name="gender" value="female"><label>Female</label><br>
            <input type="radio" name="gender" value="Other"><label>Other</label><br><br>

            <label>Accept Terms and conditions : </label><input type="checkbox" name="conditions"> <br><br>

            <input type="submit" name="submit" value="Submit Form">
        </fieldset>
        
    </form>

    <?php
    if (isset($_POST["submit"])) {
        echo "<h2>Entered Details</h2>";

        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";

        if ($password === $confirm_password) {
            echo "Password: Passwords Match<br>";
        } else {
            echo "Password: Passwords Do Not Match<br>";
        }

        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Terms and Conditions: " . $conditions . "<br>";
    }
    ?>
</body>
</html>