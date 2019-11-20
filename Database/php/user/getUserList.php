<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Get all users
*/

include '../query.php';

// Create the query string 
$query = "SELECT id,username,admin FROM `user`";
// Launch the query and get the results
$results = query($query, null);

// if results set
if (isset($results)) {
    echo json_encode($results);
} else {
     echo json_encode(array('error' => 'We are unable to retreive users.'), JSON_FORCE_OBJECT);
}
