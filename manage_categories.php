<?php
// manage_categories.php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Include database connection
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <link rel="icon" href="asset/img/loggo-web.png" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-white p-10">
        <h1 class="text-3xl font-bold">Manage Categories</h1>
        <!-- Add your category management code here -->
    </section>

    <div class="absolute top-10 left-14 py-1 px-3 border-b-black border-l-black rounded-full">
        <a href="indexadmin.php">Back to Dashboard</a>
    </div>
</body>

</html>
