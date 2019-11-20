<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Check the parameters for sign in and validate the login
*/

include './query.php';

// if we actually receive POST variables
if (!empty($_POST)) {
    // Create the query string 
    $query = "SELECT `password` FROM `user` WHERE `username` = ?";
    // Create an array for real values
    $params = array($_POST['username']);
    // Launch the query and get the results
    $results = query($query, $params);
}

// Print a message accordingly after comparing the 2 password
if (isset($results[0]['password'])) {
    // first and only row if username exists;
    $hash = $results[0]['password']; 

    if (password_verify($_POST['password'], $hash))
        echo 'You are logged in.';
} else {
    echo 'We are unable to log you in, check your username/password.';
}

 
