<?php
session_start();
require_once __DIR__ . '/../db.php'; // Ensure correct path to db.php in the parent folder

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: registration.php");
    exit;
}

// Retrieve and trim the posted data
$full_name = trim($_POST['name'] ?? '');
$dob = trim($_POST['dob'] ?? '');
$mobile = trim($_POST['mobile'] ?? '');
$aadhar_number = trim($_POST['aadhar'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$address = trim($_POST['address'] ?? '');
$gender = trim($_POST['gender'] ?? '');

// Validate that all fields are provided
if (empty($full_name) || empty($dob) || empty($mobile) || empty($aadhar_number) || empty($email) || empty($password) || empty($address) || empty($gender)) {
    header("Location: registration.php?error=" . urlencode("Please fill in all fields."));
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: registration.php?error=" . urlencode("Invalid email format."));
    exit;
}

// Check if the user already exists
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->rowCount() > 0) {
    header("Location: registration.php?error=" . urlencode("Email already registered."));
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user into the database
$stmt = $pdo->prepare("INSERT INTO users (full_name, dob, mobile, aadhar_number, email, password, address, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
try {
    $stmt->execute([$full_name, $dob, $mobile, $aadhar_number, $email, $hashedPassword, $address, $gender]);
    header("Location: login.php?success=" . urlencode("Registration successful. Please login."));
    exit;
} catch (PDOException $e) {
    header("Location: registration.php?error=" . urlencode("Registration failed: " . $e->getMessage()));
    exit;
}
?>