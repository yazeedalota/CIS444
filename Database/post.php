<!DOCTYPE html>
<!--
    Author: Matthis Le Texier
    Purpose: HTML to test getting post's data
-->
<html>
<head>
    <meta charset="utf-8">
    <title>User's data Test</title>
    <link rel="stylesheet" href="./css/menu.css" type="text/css">
    <link rel="stylesheet" href="./css/post.css" type="text/css">
    <script src="js/posts.js"></script>
</head>
<?php include "./php/nav.php"; ?>
<body>
    <div class="form">
        <fieldset>
            <legend> GET USER'S POST </legend>
                <form name="post-user">
                    <input name="username" minlength="3" maxlength="20" type="text" placeholder="please enter an username" required><br>
                    <input name="submit" type="submit" value="Search for post" onclick="return getPostByUsername(username.value);">
                </form>
                <div id="user-post-table">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Likes</th>
                            <th>Date</th>
                            <th>Last Update</th>
                        </tr>
                    </table>
                </div>
        </fieldset>

    </div>
</body>
</html>