<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evoter - Dashboard</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="leaderboard.php">Leaderboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mt-5">
        <h1 class="text-center">Dashboard</h1>
        <p class="text-center">Welcome to your voting dashboard. Choose an option below:</p>
        <div class="row mt-4">
            <!-- Candidates Card -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Candidates</h5>
                        <p class="card-text">View candidates appearing in the vote.</p>
                        <a href="candidates.php" class="btn btn-primary">View Candidates</a>
                    </div>
                </div>
            </div>
            <!-- Results Card -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Results</h5>
                        <p class="card-text">Check election results.</p>
                        <a href="results.php" class="btn btn-primary">View Results</a>
                    </div>
                </div>
            </div>
            <!-- Profile Card -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">Your voter profile details.</p>
                        <a href="profile.php" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Leaderboard Card -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Leaderboard</h5>
                        <p class="card-text">See top performing candidates.</p>
                        <a href="leaderboard.php" class="btn btn-primary">View Leaderboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>