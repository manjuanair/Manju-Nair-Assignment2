<?php
include('header.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Do something with the values
// For example, send an email

?>

<main>
    <h1>Thank You</h1>
    <p>Thank you for contacting us, <?php echo $name; ?>. We will get back to you as soon as possible.</p>
</main>

<?php
include('footer.php');
?>