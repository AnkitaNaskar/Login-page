<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Your main content here -->
    <?php
session_start();
session_unset();    // Unset all session variables
session_destroy();  // Destroy the session

// Redirect to the login page or homepage
header("Location: login.php");
exit();
?>


    <!-- Logout Button -->
    <a href="logout.php" class="btn btn-danger">Log Out</a>

</body>
</html>
