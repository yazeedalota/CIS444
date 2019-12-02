<?php
/*
    Cody Cox
*/

include 'query.php';

// if we actually receive POST variables
if (!empty($_POST)) {
    // Get the parameters in _POST array
    $username = $_POST['username'];
 
    // Create the query string 
    $query = 'INSERT INTO `post` (`user_id`, `title`, `body`, `likes`) VALUES (2,"test",?,0)';
    // Create an array for real values
    $params = array($username);
    // Launch the query and get the results
    $results = query($query, $params);
    
    // Print a message accordingly
    if ($results == 1) {
        echo 'Thanks for joining the chat ';
    } else {
        echo 'There has been a problem processing your request, please try again later.';
    }
    
}