<?php
// Start session and set default values for form fields
session_start();
$_SESSION['title'] = '';
$_SESSION['first_name'] = '';
$_SESSION['last_name'] = '';
$_SESSION['role'] = '';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>IT Support System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
// Include header
include('header.php');
?>

    <main>
        <h1>Welcome To Your IT Support System</h1>
        <h2><?php echo $_SESSION['title'] . ' ' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></h2>
        <p>Halifax Canoe and Kayak</p>
        <button onclick="toggleNav()" class="hamburger-icon"><img src="hamburger.png" alt="Hamburger Menu"></button>
    </main>

    <?php
// Include footer
include('footer.php');
?>