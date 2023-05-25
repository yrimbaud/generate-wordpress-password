<?php
function generateRandomPassword($length=20) {
    $lower_case = 'abcdefghijklmnopqrstuvwxyz';
    $upper_case = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $symbols = '!@#$€%^&*_-';
    $chars = $lower_case.$upper_case.$numbers.$symbols;
    
    // Pick one character from each type
    $password = $lower_case[random_int(0, strlen($lower_case)-1)]
                .$upper_case[random_int(0, strlen($upper_case)-1)]
                .$numbers[random_int(0, strlen($numbers)-1)]
                .$symbols[random_int(0, strlen($symbols)-1)];
  
    // Generate the rest of the password
    for($i = 3; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($all)-1)];
    }
    
    // Shuffle the password to ensure the first four characters aren't predictable
    $password = str_shuffle($password);

    return $password;
}

require_once('wp-includes/pluggable.php');

$password = generateRandomPassword($length=20);
$hashedPassword = wp_hash_password($password);

echo 'Random Password: '.$password;
echo 'Hashed Password: '.$hashedPassword;
?>
