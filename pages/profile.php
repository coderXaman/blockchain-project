<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Include the database connection file (adjust the relative path if needed)
require_once __DIR__ . '/../db.php';

// Get the current user ID from the session
$user_id = $_SESSION['user_id'];

// Prepare and execute a query to retrieve the current user's details
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user_details = $stmt->fetch();

// If no user is found (this should not happen if the session is valid), redirect to login
if (!$user_details) {
    header("Location: login.php?error=" . urlencode("User not found."));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evoter - Profile</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <!-- Inline Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Evoter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="leaderboard.php">Leaderboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile Content -->
    <div class="container mt-5">
        <h1 class="text-center">Your Profile</h1>
        <div class="card mx-auto mt-4" style="max-width: 500px;">
            <div class="card-body">
                <!-- Display user details dynamically -->
                <h5 class="card-title"><?php echo htmlspecialchars($user_details['full_name']); ?></h5>
                <p class="card-text">Email: <?php echo htmlspecialchars($user_details['email']); ?></p>
                <p class="card-text">Mobile: <?php echo htmlspecialchars($user_details['mobile']); ?></p>
                <p class="card-text">DOB: <?php echo htmlspecialchars($user_details['dob']); ?></p>
                <p class="card-text">Address: <?php echo htmlspecialchars($user_details['address']); ?></p>
                <p class="card-text">Gender: <?php echo htmlspecialchars($user_details['gender']); ?></p>
                <p class="card-text">Aadhaar: <?php echo htmlspecialchars($user_details['aadhar_number']); ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>