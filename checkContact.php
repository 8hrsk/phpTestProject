<?php
    session_start();

    $userName = htmlspecialchars($_POST['username']);
    $userEmail = htmlspecialchars($_POST['email']);
    $userSubject = htmlspecialchars($_POST['subject']);
    $userMessage = htmlspecialchars($_POST['message']);

    // echo $userName;

    $_SESSION['userName'] = $userName;
    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['userSubject'] = $userSubject;
    $_SESSION['userMessage'] = $userMessage;

    header('Location: ./contacts.php');