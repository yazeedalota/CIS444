<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Functions to get posts' data
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

include './query.php';

// if we actually receive GET variables and tag
if (!empty($_GET) && isset($_GET['tag'])) {
    // Create the query string 
    $query = "SELECT `post`.id,`post`.user_id,`post`.title,`post`.body,`post`.likes,`post`.date,`post`.last_update FROM `post` WHERE `post`.tag = ?";
    // Create an array for real values
    $params = array($_GET['tag']);
    // Launch the query and get the results
    $results = query($query, $params);
}

// if tag exists
if (isset($results)) {
    echo json_encode($results);
} else {
     echo json_encode(array('error' => 'We are unable to find this tag.'), JSON_FORCE_OBJECT);
}