<?php
session_start();
?>

<?php include 'header.php'; ?>

<main>
	<h2>Need Help?</h2>
	<?php
	if ($_SESSION['role'] == 'ceo') {
		echo '<p>Call us at 1-800-123-4567 for assistance.</p>';
	} else {
		echo '<p>Sorry, this page is only available to CEOs.</p>';
	}
	?>
</main>

<?php include 'footer.php'; ?>