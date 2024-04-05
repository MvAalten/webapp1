<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
}
?>
<?php

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
        <a> You're logged in as admin</a>
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
        </div>
    </div>
    <div class="under-body">
        <div class="log-workout-box-admin">

            <div class="log-workout">
                <div class="text-box-workout">
                    <p>Exercise name</p>
                </div>
                <input class="type-log-workout" type="Name" placeholder="Exercise name" required>
            </div>
            <div class="log-workout">
                <div class="text-box-workout">
                    <p>Targeted muscles</p>
                </div>
                <input class="type-log-workout" type="Name" placeholder="Targeted muscles" required>
            </div>
                        <div class="log-workout1">
                <div class="text-box-workout">
                    <p>Example image</p>
                </div>
                <input class="center" type="file" placeholder="Example image" required>

                <?php
                
                ?>
                 <form action='user_delete_logic.php' name='user_delete_logic.php' method="post">
                    <label> User delete: </label>
                    <br>
                    <input type="text" name="user_id" placeholder="id delete" required>
                    <input type="submit" value="Delete">
                 </form>
                 <form action='exercise_delete_logic.php' name='exercise_delete_logic.php' method="post">
                    <label> Exercise delete: </label>  
                    <input type="text" name="exercise_id" placeholder="Exercise delete" required>
                    <input type="submit" value="Delete">
                 </form>
            </div>
        </div>
    </div>
</body>
</html>