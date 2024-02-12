<?php

function validatePassword($password) {
    try {
        // Ensure password is a string
        if (!is_string($password)) {
            throw new InvalidArgumentException("Password must be a string.");
        }

        // Check password length
        if (strlen($password) < 6) {
            throw new LengthException("Password must be at least 6 characters long.");
        }

        // Password is valid
        return true;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


$password1 = "alvin123";
$password2 = "short";

if (validatePassword($password1)) {
    echo "Password 1 is valid.";
} else {
    echo "Password 1 is invalid.";
}

echo "<br>";

if (validatePassword($password2)) {
    echo "Password 2 is valid.";
} else {
    echo "Password 2 is invalid.";
}

?>
