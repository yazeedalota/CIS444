<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Check the parameters for register and validate the registration
*/

include './query.php';

// if we actually receive POST variables
if (!empty($_POST)) {
    // Get the parameters in _POST array
    $username = $_POST['username'];
    // We hash the password for confidentiality and security
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // If checkbox is checked, $_POST['admin'] is set
    $admin = isset($_POST['admin']) ? '1' : '0';
 
    // Create the query string 
    $query = 'INSERT INTO `user` (`username`, `password`, `admin`) VALUES (?,?,?)';
    // Create an array for real values
    $params = array($username, $password, $admin);
    // Launch the query and get the results
    $results = query($query, $params);
    
    // Print a message accordingly
    if ($results == 1) {
        echo 'Thanks for registering ' . $username;
    } else {
        echo 'There has been a problem processing your request, please try again later.';
    }
    
}