<?php
/*
    Author:     Matthis Le Texier
    Purpose:    Functions related to comment datas
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

include './query.php';

// if we actually receive GET variables and tag
if (!empty($_GET) && 
    !empty($_POST) && 
    isset($_GET['post_id']) &&
    isset($_POST['name']) &&
    isset($_POST['comment']))
{
    $post_id = $_GET['post_id'];
    $author = $_POST['name'];
    $body = $_POST['comment'];

    // Create the query string 
    $query = "INSERT INTO `comment` (`id`, `user_id`, `author`, `post_id`, `body`, `likes`, `date`, `last_update`) VALUES (NULL, '0', ?, ?, ?, '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    // Create an array for real values
    $params = array($author, $post_id, $body);
    // Launch the query and get the results
    $results = query($query, $params);
}

// if tag exists
if (isset($results)) {
    echo "Your comment has been post !";
} else {
     echo 'There was a problem saving your comment...';
}


?>