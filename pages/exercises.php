<?php
 include '../pages/conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>PUMP UP</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="space">

    </div>
    <div class="header">
        <div class="logo">
            <h2>PUMP UP</h2>
        </div>
        <div class="buttons">
        <a class="auto" id="log" href="../index.php">Main page</a>
            <a class="auto" id="log" href="../pages/log.php">Log workout</a>
            <a class="auto" id="workouts">Workouts</a>
            <a class="auto" id="exercises  ">Exercises</a>
            <a class="login-button" href="../pages/login.php">login</a>
        </div>
    </div>
    <div class="box-under-nav-extra-thing">
        <div class="box">
            <div class="name">

            </div>
            <div class="target">
                
            </div>
            <div class="see">

            </div>
        </div>
    </div>
    <?php
    $stmt = $connection->query('SELECT name FROM users');
    while ($row = $stmt->fetch())
    {
        
    }
    ?>
</body>
</html>