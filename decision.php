<?php
session_start();

$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$role = $_POST['role'];

$_SESSION['title'] = $title;
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['role'] = $role;
?>

<?php include 'header.php'; ?>

<h2>Role Selection Results</h2>
<p>You have selected the <?php echo $role; ?> role.</p>

<?php
if ($role == 'admin') {
	echo '<p>Welcome, Admin ' . $last_name . '!</p>';
} elseif ($role == 'manager') {
	echo '<p>Welcome, Manager ' . $last_name . '!</p>';
} elseif ($role == 'ceo') {
	echo '<p>Welcome, CEO ' . $last_name . '!</p>';
}
?>

<p>Here is your information:</p>
<ul>
	<li>Title: <?php echo $title; ?></li>
	<li>First Name: <?php echo $first_name; ?></li>
	<li>Last Name: <?php echo $last_name; ?></li>
	<li>Role: <?php echo $role; ?></li>
</ul>

<?php include 'footer.php'; ?>