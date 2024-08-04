<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">
<script src="./util/header.js" async></script>
    <title>ChatMe</title>
</head>
<body class="home">

<?php
$shoudGetStartedButtonAppear =  true;
$currPage = "home";
$isLightText = true;
?>
<? include_once "./util/header2.php" ?>
<section class="banner">
<div class="img"></div>
<div class="slogan ">
<h2>
Connect with your friends <br/> and family
</h2>
<a href="/signup.php" class="button signup">Get Started</a>
</div>
</section>

<?php include_once "./util/footer.php" ?>
</body>
</html>
