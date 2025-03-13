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
    <title>Evoter - Leaderboard</title>
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
                    <li class="nav-item"><a class="nav-link" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="leaderboard.php">Leaderboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Leaderboard Content -->
    <div class="container mt-5">
        <h1 class="text-center">Leaderboard</h1>
        <p class="text-center">Top candidates based on votes:</p>
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Rank</th>
                        <th>Candidate</th>
                        <th>Votes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Candidate 1</td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Candidate 2</td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Candidate 3</td>
                        <td>900</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>