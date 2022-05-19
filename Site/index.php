<?php
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/index.css">
    <title>Персональный сайт</title>
    <script src="https://kit.fontawesome.com/d0c5d1d01e.js" crossorigin="anonymous"></script>
    <script src="Scripts/jquery-3.6.0.js"></script>
</head>
<body>
    <?php include_once 'components/navbar.php' ?>
    <div class="contentWrapper">
        <div class="content">

            <?php include_once 'components/main.php' ?>
            <?php include_once 'components/about.php' ?>
            <?php include_once 'components/pets.php' ?>
            <?php include_once 'components/projects.php' ?>
            <?php include_once 'components/mlidm.php' ?>
            <?php include_once 'components/gallery.php' ?>
        </div>
    </div>
    <video id="background-video" autoplay loop muted>
        <source src="Images/videoplayback.mp4" type="video/mp4">
    </video>
    <script src="Scripts/typing.js"></script>
</body>
</html>
