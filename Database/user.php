<!DOCTYPE html>
<!--
    Author: Matthis Le Texier
    Purpose: HTML file to test getting user's data
-->
<html>
<head>
    <meta charset="utf-8">
    <title>User's data Test</title>
    <link rel="stylesheet" href="./css/user.css" type="text/css">
    <link rel="stylesheet" href="./css/menu.css" type="text/css">
    <script src="js/users.js"></script>
</head>
<?php include "./php/nav.php"; ?>
<body>
    <div class="form">
        <fieldset>
            <legend> GET USER DATA </legend>
            <form name="userData" onsubmit="return getUserData(username.value);" method="get">
                <input name="username" type="text" placeholder="please enter an username" required><br>
                <div id="username"></div>
                <div id="admin"></div>
                <input name="submit-user-data" type="submit">
            </form>
        </fieldset>
    </div>
    <br>
    <hr>
    <br>
    <div class="form">
        <fieldset>
            <legend> GET USER LIST </legend>
                <button type="button" onclick="return getUserList();">Load Users</button>
                <div id="user-table">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Is Admin ?</th>
                        </tr>
                    </table>
                </div>
        </fieldset>

    </div>
</body>
</html>