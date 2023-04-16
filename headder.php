<header>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
            if ($_SESSION['role'] == 'admin') {
                echo '<li><a href="new-account.php">Create New Account</a></li>';
                echo '<li><a href="isnt-working.php">My Computer Isn\'t Working</a></li>';
            } else if ($_SESSION['role'] == 'manager') {
                echo '<li><a href="lost-password.php">Lost Password</a></li>';
                echo '<li><a href="isnt-working.php">My Computer Isn\'t Working</a></li>';
            } else if ($_SESSION['role'] == 'ceo') {
                echo '<li><a href="need-help.php">Need Help?</a></li>';
                echo '<li><a href="isnt-working.php">My Computer Isn\'t Working</a></li>';
            }
            ?>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<script>
    function toggleNav() {
        var nav = document.getElementById("nav");
        nav.classList.toggle("active");
    }
</script>
