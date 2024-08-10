<?php
// logout.php

// Delete the cookie
setcookie('username', '', time() - 3600); // expire the cookie

// Redirect to login page
header('Location: login.php');
exit;
?>