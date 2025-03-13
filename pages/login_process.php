<?php
session_start();
require_once __DIR__ . '/../db.php';  // Adjust path according to your folder structure

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($email) || empty($password)) {
    header("Location: login.php?error=" . urlencode("Please fill in all fields."));
    exit;
}

// Retrieve the user record by email
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Password is correct; note that the primary key column is 'id'
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    header("Location: dashboard.php");
    exit;
} else {
    // Incorrect credentials
    header("Location: login.php?error=" . urlencode("Invalid email or password. Try registering first if you don't have an account."));
    exit;
}
?>