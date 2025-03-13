<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evoter - Home</title>
    <!-- For index.php (in root), use assets/ directly -->
    <link href="assets/css/styles.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php">Evoter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item"><a class="nav-link" href="pages/dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/candidates.php">Candidates</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/results.php">Results</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/leaderboard.php">Leaderboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/logout.php">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="pages/about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/registration.php">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container text-center mt-5">
        <h1>Welcome to Evoter</h1>
        <p>Your secure, blockchain-based e-voting solution.</p>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="mt-4">
                <a href="pages/registration.php" class="btn btn-primary me-2">Register</a>
                <a href="pages/login.php" class="btn btn-secondary">Login</a>
            </div>
        <?php else: ?>
            <div class="mt-4">
                <a href="pages/dashboard.php" class="btn btn-primary">Go to Dashboard</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>