<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ececee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    $name = $_POST["name"] ?? '';
    $height = $_POST["height"] ?? 0;
    $weight = $_POST["weight"] ?? 0;
    $gender = $_POST["gender"] ?? '';

    // Calculate BMI
    $heightInMeters = $height / 100;
    $bmi = $weight / ($heightInMeters * $heightInMeters);
    $bmi = round($bmi, 2);
    ?>

    <h2>BMI Results</h2> <br>
    <p>Name: <?php echo htmlspecialchars($name); ?></p> <br>
    <p>Height: <?php echo htmlspecialchars($height); ?> cm</p> <br>
    <p>Weight: <?php echo htmlspecialchars($weight); ?> kg</p> <br>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p> <br>
    <p>Your BMI is: <?php echo $bmi; ?></p> <br>

</body>

<?php
$name = $_POST["name"] ?? '';
$height = $_POST["height"] ?? 0;
$weight = $_POST["weight"] ?? 0;
$gender = $_POST["gender"] ?? '';

// Enable detailed error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
VALUES ('$name', $height, $weight, '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

</html>