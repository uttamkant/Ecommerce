<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['userid'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

// Redirect to the login page or home page
header("Location: user_login.php");
exit();
?>
