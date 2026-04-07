<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$college = $_POST['college'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ID Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
    <div class="header">
        <h2><?php echo $college; ?></h2>
        <p>STUDENT ID CARD</p>
    </div>
    <div class="details">
        <p><span>Name:</span> <?php echo $name; ?></p>
        <p><span>Roll No:</span> <?php echo $roll; ?></p>
        <p><span>Course:</span> <?php echo $course; ?></p>
    </div>
</div>

</body>
</html>


