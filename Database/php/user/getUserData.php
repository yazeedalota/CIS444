<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Get an user related datas
*/

include '../query.php';

// if we actually receive GET variables and username
if (!empty($_GET) && isset($_GET['username'])) {
    // Create the query string 
    $query = "SELECT `username`,`admin` FROM `user` WHERE `username` = ?";
    // Create an array for real values
    $params = array($_GET['username']);
    // Launch the query and get the results
    $results = query($query, $params);
}

// if user exists
if (isset($results[0])) {
    // first and only row if username exists;
    $user = $results[0]; 

    echo json_encode($user);
} else {
     echo json_encode(array('error' => 'We are unable to find this user.'), JSON_FORCE_OBJECT);
}
