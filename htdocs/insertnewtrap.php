<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Page</title>
</head>
<body>
<?php

require("../includes/connect.inc");
include "../includes/nav.html";


?>

<br> <h1>This is the trap insertion page</h1> <br>

<?php
include "../includes/insertnew.html";

include "../includes/footer.html";
?>
</body>
</html>