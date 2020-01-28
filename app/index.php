<?php
include '../vars.php';

$app = $_SERVER['HTTP_HOST'];

if ($app == 'master.com') {
    die('incorrect app: ' . $app);
}

session_start();

echo "
<html>
    <head>
    <title>$app - Login</title>
    <head>
    <body>
";

if(!isset($_SESSION['name'])) {
    echo "<a href=\"$MASTER_BASE_URL\">Click here to Login</a>";
} else {
    $name = $_SESSION['name'];
    $picture = $_SESSION['picture'];
    echo "You're: ".$name;
    echo "<img src=\"$picture\" alt=\"picture\" height=42 width=42/>";
    echo "<a href=\"logout.php\">logout</a>";
}

echo "
    </body>
</html>
";
