<!---------
Yazeed Alotaibi
Dr. Wu
CIS444
Project: Webpages
Team E
------>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Cougar Life Style: Food</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/team_e/css/foodstyle.css" type="text/css">
    <link rel="stylesheet" href="/team_e/css/nav.css" type="text/css">
    <script src="/team_e/js/posts.js"></script>

    <?php include dirname(__DIR__)."/nav.php"; ?>
</head>

<body onload="getPostByTag('food')">
    <h2 class="head">Cougars Dinning Options</h2>

    <br>

    <!-- All the content (posts, comment, etc) will go under this div -->
    <div id="content">
    </div>

</body>

</html>