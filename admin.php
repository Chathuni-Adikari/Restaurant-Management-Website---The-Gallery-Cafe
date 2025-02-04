<?php
session_start();
$conn=mysqli_connect("localhost", "root","","the_gallery_cafedb");

// Check if the user is an admin
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'Admin') {
    header("Location: signIn.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $userId = $_POST['user_id'];

    if ($action == 'delete') {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
    } elseif ($action == 'modify') {
        $newUserType = $_POST['user_type'];
        $stmt = $conn->prepare("UPDATE users SET user_type = ? WHERE id = ?");
        $stmt->bind_param("si", $newUserType, $userId);
        $stmt->execute();
    }
}

$result = $conn->query("SELECT * FROM users");
