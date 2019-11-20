<!DOCTYPE html>
<!--
    Author: Matthis Le Texier
    Purpose: HTML file to test register/login as user
-->
<html>
<head>
    <meta charset="utf-8">
    <title>Register / Login Test</title>
    <link rel="stylesheet" href="./css/menu.css" type="text/css">
    <link rel="stylesheet" href="./css/login.css" type="text/css">
</head>
<?php include "./php/nav.php"; ?>
<body>
    <div class="form">
        <fieldset>
            <legend> REGISTER </legend>
            <form name="register" action="./php/register.php" method="post">
                <input name="username" minlength="3" maxlength="20" type="text" placeholder="please enter a user name" required><br>
                <input name="password" minlength="6" type="password" placeholder="please enter a password" required><br>
                <input name="admin" value="1" id="cbAdmin" type="checkbox">
                <label for="cbAdmin">Administrator</label><br>
                <input name="submit" type="submit">
            </form>
        </fieldset>
    </div>
    <br>
    <hr>
    <br>
    <div class="form">
        <fieldset>
            <legend> LOGIN </legend>
            <form name="login" action="./php/login.php" method="post">
                <input name="username" minlength="3" maxlength="20" type="text" placeholder="please enter your user name" required><br>
                <input name="password" type="password" placeholder="please enter your password" required><br>
                <input name="submit" type="submit">
            </form>
        </fieldset>
    </div>
    <div id="response"></div>
    <!-- <script type="text/javascript" src="inc/jquery/jquery-1.11.2.min.js"/> -->
    <!-- <script type="text/javascript" src="inc/jquery/functions.js"/> -->
</body>
</html>