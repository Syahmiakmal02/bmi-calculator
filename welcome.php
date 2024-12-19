<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
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

    <h2>BMI Results</h2>
    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Height: <?php echo htmlspecialchars($height); ?> cm</p>
    <p>Weight: <?php echo htmlspecialchars($weight); ?> kg</p>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
    <p>Your BMI is: <?php echo $bmi; ?></p>

</body>
</html>