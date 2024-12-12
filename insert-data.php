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

    <form id="bmiForm" onsubmit="calculateBMI(event)">
        <label for="name">Nama:</label> <br>
        <input type="text" name="name" id="name" required> <br>
        <label for="height">height (cm):</label> <br>
        <input type="number" name="height" id="height" required> <br>
        <label for="weight">weight (kg):</label> <br>
        <input type="number" name="weight" id="weight" required> <br>
        <label for="gender">gender:</label> <br>
        <input type="radio" name="gender" id="gender_male" value="male" required> male <br>
        <input type="radio" name="gender" id="gender_female" value="female" required> female <br><br>

        <input type="submit" value="Submit">
    </form>

    <h3 id="result"></h3>

</body>

<?php
$servername = "localhost";
$username = "d20221101856";
$password = "Aa151k027!!";
$dbname = "d20221101856";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "INSERT INTO bmi_calculator (name, height, weight, gender)
VALUES ('Akmal', 171.1, 70.2, 'male')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>


<script src="script.js"></script>

</html>