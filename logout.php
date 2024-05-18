<?php
session_start();

// Check if the "authenticate" session variable is set
//if (isset($_SESSION['authenticate'])) {
   // $_SESSION['authenticate'] = 'no';
   
//}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// At this point, the session is destroyed, and the $_SESSION array is empty.
// Any attempts to access $_SESSION['authenticate'] will result in an empty value.

// Redirect to the login page
header("Location: index.php");
exit();
?>
