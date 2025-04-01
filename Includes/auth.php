<?php
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function isAdmin() {
    return isLoggedIn() && $_SESSION['role'] == 'admin';
}

function isFaculty() {
    return isLoggedIn() && $_SESSION['role'] == 'faculty';
}

function isStudent() {
    return isLoggedIn() && $_SESSION['role'] == 'student';
}

function redirectIfNotLoggedIn() {
    if (!isLoggedIn()) {
        header("Location: ../auth/login.php");
        exit();
    }
}

function redirectBasedOnRole() {
    if (isAdmin()) header("Location: ../admin/dashboard.php");
    elseif (isFaculty()) header("Location: ../faculty/dashboard.php");
    elseif (isStudent()) header("Location: ../student/dashboard.php");
    else header("Location: ../auth/login.php");
    exit();
}
?>