<?php
 include 'pages/conn.php';
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
    <link rel="stylesheet" href="css/main.css">
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
            <a class="auto" id="workouts" href="../pages/workout.php">Workouts</a>
            <a class="auto" id="exercises" href="../pages/exercises.php">Exercises</a>
            <a class="login-button" href="../pages/login.php">login</a>
        </div>
    </div>
    <div class="exercise-prequals">
        <div class="block">
            <div class="example">
                <img src="assets/row2.png" alt="">
            </div>
            <div class="lower-block">
                <div class="exercise-name">
                <h2>Deadlift</h2>
                </div>
                <div class="see-more">
                    <a>See more ></a>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="example1">
                <img src="assets/front.jpg" alt="">
            </div>
            <div class="lower-block">
                <div class="exercise-name">
                    <h2>Front barbell lateral raise</h2>
                </div>
                <div class="see-more">
                    <a>See more ></a>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="example2">
                <img src="assets/barbbell_row.png" alt="">
            </div>
            <div class="lower-block">
                <div class="exercise-name">
                    <h2>Barbell row</h2>
                </div>
                <div class="see-more">
                    <a>See more ></a>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="example3">
                <img src="assets/squat2.png" alt="">
            </div>
            <div class="lower-block">
                <div class="exercise-name">
                    <h2>Close grip deadlift</h2>
                </div>
                <div class="see-more">
                    <a>See more ></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>