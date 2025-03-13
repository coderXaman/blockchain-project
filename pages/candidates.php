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
    <title>Evoter - Candidates</title>
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
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="candidates.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="leaderboard.php">Leaderboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Candidates Content -->
    <div class="container mt-5">
        <h1 class="text-center">Candidates</h1>
        <p class="text-center">List of candidates participating in the election:</p>
        <div class="row mt-4">
            <!-- Candidate 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../assets/images/candidate1.jpg" class="card-img-top" alt="Candidate 1">
                    <div class="card-body">
                        <h5 class="card-title">Candidate 1</h5>
                        <p class="card-text">Brief description of Candidate 1.</p>
                    </div>
                </div>
            </div>
            <!-- Candidate 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../assets/images/candidate2.jpg" class="card-img-top" alt="Candidate 2">
                    <div class="card-body">
                        <h5 class="card-title">Candidate 2</h5>
                        <p class="card-text">Brief description of Candidate 2.</p>
                    </div>
                </div>
            </div>
            <!-- Candidate 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../assets/images/candidate3.jpg" class="card-img-top" alt="Candidate 3">
                    <div class="card-body">
                        <h5 class="card-title">Candidate 3</h5>
                        <p class="card-text">Brief description of Candidate 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>