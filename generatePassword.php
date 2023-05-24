<?php
require_once('wp-includes/pluggable.php');

$password = "Your strong password!";
$hashedPassword = wp_hash_password($password);

echo 'Password: '.$hashedPassword;
?>
