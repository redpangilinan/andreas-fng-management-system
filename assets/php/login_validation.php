<?php
// Redirect the user to the login page if a session does not exist
function validateSession()
{
    if (!isset($_SESSION['account_id'])) {
        header("Location: admin.php");
        exit();
    }
}

// Logs the user automatically if a session exists
function autoLogin()
{
    if (isset($_SESSION['account_id'])) {
        header("Location: dashboard.php");
        exit();
    }
}

// Prevents access if the account is not an admin
function privateAccess()
{
    if ($_SESSION['account_type'] != "Admin" || $_SESSION['account_type'] != "Owner" || $_SESSION['account_type'] != "Co-owner") {
        header('Location: dashboard.php');
    }
}
