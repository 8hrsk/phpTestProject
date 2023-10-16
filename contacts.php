<?php
    session_start();
    $title = "Contacts PHP";
    require "./components/header.php";
?>

<h1>Contacts Page</h1>

<?php
    if (isset($_SESSION['userName'])) {
        echo "Hello, " . $_SESSION['userName'] . "!";
    } else {
        require "./components/contact.php";
    }
?>

<?php
    require "./components/footer.php";
?>