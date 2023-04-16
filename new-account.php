<?php
// Start session and check role
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create New Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Include header
include('header.php');
?>

<main>
    <h1>Create New Account</h1>
    <form action="send-email.php" method="post">
        <input type="hidden" name="email_type" value="new_account">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
</main>

<?php
// Include footer
include('footer.php');
?>
