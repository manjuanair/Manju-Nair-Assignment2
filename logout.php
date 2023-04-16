<?php
session_start();

// Destroy session data
session_unset();
session_destroy();
?>

<?php include 'header.php'; ?>

<main>
	<h2>Logout</h2>
	<p>You have been successfully logged out.</p>
</main>

<?php include 'footer.php'; ?>