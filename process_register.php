<?php
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $role = 'peminjam'; // Set default role as 'peminjam'

    $sql = "INSERT INTO user (username, password, nama, alamat, telepon, role) VALUES ('$username', '$password', '$nama', '$alamat', '$telepon', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.php"); // Redirect to login page after successful registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
