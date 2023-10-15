<?php
function hashPassword($password) {
    return md5($password);
}

// check user data
if (empty($_POST['userName']) || empty($_POST['userMail']) || empty($_POST['userPassword']) || empty($_POST['userMessage'])) {
    echo "All fields are required";
} else {
    header('Location: ./index.php');
    exit();
}