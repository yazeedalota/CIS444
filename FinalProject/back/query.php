<?php
/*
    Author:      Matthis Le Texier
    Purpose:     Function used to prepare & execute MySQL queries
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('USER', 'team_e');
define('PASS', 'qo0uCaghBtri');


function query($query, $params) {
    // what kind of query is this?
    $queryType = explode(' ', $query)[0];

    // establish database connection
    try {
        // create a new PDO object with host, username and password to access mysql server
        $db = new PDO('mysql:host=localhost;dbname=team_e', USER, PASS); 
        // tells PDO to disable emulating prepared statements and use actual prepared statements
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
        // enable error mode and exception error mode
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    // we catch occuring exception 
    catch(PDOException $e) {
        // give user a friendly message
        echo "We are experiencing a technical difficulty. Please stand by."; 
        // write the error out to a log you can check at your leisure
        echo "[ERROR - " . $e->getCode() . "] " . $e->getMessage() . "\r\n";
        exit; 
    }

    // run query
    try {
        // Prepares a statement for execution and returns a statement object
        $queryResults = $db->prepare($query);
        // Executes a prepared statement 
        // params should be an array of values passed to execute() so it can replace them on the prepared query just before 
        $queryResults->execute($params);
        // check the type of query which, in turn, allows us to return the results if needed (if it's a SELECT query)
        if($queryResults != null && 'SELECT' == $queryType) {
            // Returns an array containing all of the result set rows
            $results = $queryResults->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } else { // not a SELECT query
            // we return the number of row affected
            return $queryResults->rowCount();
        }
        $queryResults = null; // first of the two steps to properly close
        $db = null; // second step tp close the connection
    }
    // we catch occuring exception 
    catch(PDOException $e) { 
        // give user a friendly message
        echo "We are experiencing a technical difficulty. Please stand by."; 
        // write the error out to a log you can check at your leisure
        echo "[ERROR - " . $e->getCode() . "] " . $e->getMessage() . "\r\n"; 
        exit; 
    }
}

?>