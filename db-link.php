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
        <label for="nama">Nama:</label> <br>
        <input type="text" name="nama" id="nama" required> <br>
        <label for="umur">Umur:</label> <br>
        <input type="number" name="umur" id="umur" required> <br>
        <label for="berat">Berat (kg):</label> <br>
        <input type="number" name="berat" id="berat" required> <br>
        <label for="tinggi">tinggi (cm):</label> <br>
        <input type="number" name="tinggi" id="tinggi" required> <br>
        <label for="jantina">jantina:</label> <br>
        <input type="radio" name="jantina" id="jantina_lelaki" value="lelaki" required> Lelaki <br>
        <input type="radio" name="jantina" id="jantina_perempuan" value="perempuan" required> Perempuan <br><br>

        <input type="submit" value="Submit">
    </form>

    <h3 id="result"></h3>

</body>

<?php
$servername = "localhost";
$username = "d20221101856";
$password = "Aa151k027!!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<script src="script.js"></script>

</html>