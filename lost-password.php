<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
	<h2>Lost Password</h2>
	<form method="post" action="send-email.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<input type="hidden" name="emailType" value="lostPassword">

		<input type="submit" value="Reset Password">
	</form>
</main>

<?php include 'footer.php'; ?>