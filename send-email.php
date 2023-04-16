<?php
session_start();

$emailType = $_POST['emailType'];

if ($emailType == 'newAccount') {
	$message = 'Thank you for creating a new account!';
} elseif ($emailType == 'lostPassword') {
	$message = 'Your password has been reset. Please check your email for further instructions.';
} else {
	$message = 'Unknown email type.';
}
?>

<?php include 'header.php'; ?>

<main>
	<h2>Email Sent</h2>
	<p><?php echo $message; ?></p>
</main>

<?php include 'footer.php'; ?>