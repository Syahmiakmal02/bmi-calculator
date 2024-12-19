<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiraan BMI</title>
    <link rel="stylesheet" href="style.css">
    <header>
        <h1>Pengiraan BMI</h1>
        <p>Isi borang di bawah untuk mengira BMI anda:</p>
    </header>
</head>

<body>
    <?php if ($message) echo "<p>$message</p>"; ?>

    <form id="bmiForm" method="POST" onsubmit="calculateBMI(event)">
        <label for="name">Nama:</label> <br>
        <input type="text" name="name" id="name" required> <br>
        <label for="height">height (cm):</label> <br>
        <input type="number" name="height" id="height" step="0.1" required> <br>
        <label for="weight">weight (kg):</label> <br>
        <input type="number" name="weight" id="weight" step="0.1" required> <br>
        <label for="gender">gender:</label> <br>
        <input type="radio" name="gender" id="gender_male" value="male" required> male <br>
        <input type="radio" name="gender" id="gender_female" value="female" required> female <br><br>

        <input type="submit" value="Submit">
    </form>

    <h3 id="result"></h3>

</body>

<?php
// Enable detailed error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message = '';

// Create connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "d20221101856";
    $password = "Aa151k027!!";
    $dbname = "d20221101856";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $message = "Connection failed: " . $conn->connect_error;
    } else {
        // Validate and get form data
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $height = isset($_POST['height']) ? floatval($_POST['height']) : 0;
        $weight = isset($_POST['weight']) ? floatval($_POST['weight']) : 0;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

        // Prepare statement
        $stmt = $conn->prepare("INSERT INTO bmi_calculator (name, height, weight, gender) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sdds", $name, $height, $weight, $gender);

        // Execute and check
        if ($stmt->execute()) {
            $message = "Record added successfully";
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>


<script src="script.js"></script>

</html>