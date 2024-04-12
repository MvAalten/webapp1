<?php
session_start();
include 'conn.php';


$id = $_POST["exercise_id"];


$stmt = $connection->prepare("DELETE FROM exercises WHERE id=:id_exercises");
$stmt->bindParam(":id_exercises", $id);
$stmt->execute();

header('Location: dashboard.php');
?>