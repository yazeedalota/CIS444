<?php

include 'query.php';

// if we actually receive GET variables and username
if (!empty($_GET) && isset($_GET['category'])) {
    // Create the query string 
    $query = "SELECT `post`.user_id,`user`.username,`post`.title,`post`.body,`post`.date FROM `post` INNER JOIN `user` ON `post`.user_id = `user`.id WHERE `post`.title = ?";
    // Create an array for real values
    $params = array($_GET['category']);
    // Launch the query and get the results
    $results = query($query, $params);
}

// if user exists
if (isset($results)) {
    echo json_encode($results);
} else {
     echo json_encode(array('error' => 'We are unable to find this user.'), JSON_FORCE_OBJECT);
}
