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
            <div id="contentTitle" class="contentTitle">
                <h1>Добро пожаловать на мою страницу!</h1>
            </div>
            <div id="mainW" class="menuCard">

                <div id="introduction" class="introduction">
                    <div class="controlMenuCard">
                        <i class="fa-solid fa-xmark"></i>
                        <i class="fa-solid fa-expand"></i>
                        <i class="fa-solid fa-minus"></i>
                    </div>

                    <h2>Введение</h2>
                    <div class="menuInformation">
                        <div class="aboutImage">
                            <img src="Images/GW%20logo.png" width="200px">
                        </div>
                        <p id="typing1"></p>
                    </div>

                </div>
                <div class="menuChoices">
                    <div id="aboutMeBtn" class="menuItem" style="--i:0">
                        <p>О себе</p>
                        <i class="fa-solid fa-angles-right itemArrow"></i>
                    </div>
                    <div id="petsBtn" class="menuItem" style="--i:1">
                        <p>Питомцы</p>
                        <i class="fa-solid fa-angles-right itemArrow"></i>
                    </div>
                    <div id="projectsBtn" class="menuItem" style="--i:2">
                        <p>Проекты</p>
                        <i class="fa-solid fa-angles-right itemArrow"></i>
                    </div>
                    <div id="galleryBtn" class="menuItem" style="--i:3">
                        <p>Галерея</p>
                        <i class="fa-solid fa-angles-right itemArrow"></i>
                    </div>
                    <div id="mlidmBtn" class="menuItem" style="--i:4">
                        <p>МЛИДМ</p>
                        <i class="fa-solid fa-angles-right itemArrow"></i>
                    </div>
                </div>
            </div>

            <div id="aboutW" class="aboutWrapper" style="display: none">
                <div class="about">
                    <div class="aboutEl">
                        <div class="aboutImage">
                            <img src="Images/meButInMyDreams.png" width="200px">
                        </div>
                        <div class="aboutTextWrapper">
                            <div class="aboutTitle"><h2>О себе</h2></div>
                            <div class="aboutText">
                                <p class="aboutItem"><span class="bold">Имя: </span>Давыдов Даниил Денисович</p>
                                <br>
                                <p class="aboutItem"><span class="bold">Дата рождения: </span>12.06.2003</p>
                                <br>
                                <p class="aboutItem"><span class="bold">Первый язык начат в: </span>12 лет</p>
                                <br>
                                <p class="aboutItem"><span class="bold">Уверенные знания: </span>С++, JavaScript, HTML, CSS, ReactJS</p>
                                <br>
                                <p class="aboutItem"><span class="bold">Небольшие знания: </span>Java, Python, JQuery, С#</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="aboutBackBtn" class="aboutBackBtn">
                    <p>Назад</p>
                </div>
            </div>
            <div id="petsW" class="aboutWrapper" style="display: none">
                <div class="about">
                    <div class="aboutEl">
                        <div class="aboutPetImage">
                            <img src="Images/meButInMyDreams.png" width="150px">
                        </div>
                        <div class="aboutTextWrapper">
                            <div class="aboutTitle"><h2>Пушок</h2></div>
                            <div class="aboutText">
                                <p class="aboutItem"><span class="bold">Описание: </span>Чёрно-белый кот, самый старший из всех. Не очень любит вести отношения с другими.</p>
                            </div>
                        </div>
                    </div>
                    <div class="aboutEl">
                        <div class="aboutPetImage">
                            <img src="Images/meButInMyDreams.png" width="150px">
                        </div>
                        <div class="aboutTextWrapper">
                            <div class="aboutTitle"><h2>Гриша</h2></div>
                            <div class="aboutText">
                                <p class="aboutItem"><span class="bold">Описание: </span>Чёрный кот с президенстким характером и добрым человеческим сердцем.</p>
                            </div>
                        </div>
                    </div>
                    <div class="aboutEl">
                        <div class="aboutPetImage">
                            <img src="Images/meButInMyDreams.png" width="150px">
                        </div>
                        <div class="aboutTextWrapper">
                            <div class="aboutTitle"><h2>Ёша</h2></div>
                            <div class="aboutText">
                                <p class="aboutItem"><span class="bold">Описание: </span>Камышовая кошка, которая любит вводить свои собственные правила жизни. Любит людей намного больше чем себе подобных.</p>
                            </div>
                        </div>
                    </div>
                    <div class="aboutEl">
                        <div class="aboutPetImage">
                            <img src="Images/meButInMyDreams.png" width="150px">
                        </div>
                        <div class="aboutTextWrapper">
                            <div class="aboutTitle"><h2>Фрося</h2></div>
                            <div class="aboutText">
                                <p class="aboutItem"><span class="bold">Описание: </span>Трёхцветная кошка. Самая молодая из всех, но при этом самая большая и сильная из всех.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="aboutBackBtn" class="aboutBackBtn">
                    <p>Назад</p>
                </div>
            </div>
        </div>
    </div>
    <video id="background-video" autoplay loop muted>
        <source src="Images/videoplayback.mp4" type="video/mp4">
    </video>
    <script src="Scripts/typing.js"></script>
</body>
</html>
