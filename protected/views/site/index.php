<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<!--<div align="center">-->
<!--    <img src="protected/imagenes/img1.jpeg" alt="Consultorio Medico Gutierrez" style="width:700px;height:700px;">-->
<!--</div>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="protected/imagenes/img1.jpeg" style="width:700px;height:700px;">
<!--                <div class="carousel-caption">-->
<!--                    <h3>Chania</h3>-->
<!--                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>-->
<!--                </div>-->
            </div>

            <div class="item">
                <img src="protected/imagenes/img2.jpeg" style="width:700px;height:700px;">
<!--                <div class="carousel-caption">-->
<!--                    <h3>Chania</h3>-->
<!--                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>-->
<!--                </div>-->
            </div>

            <div class="item">
                <img src="protected/imagenes/img3.jpeg" style="width:700px;height:700px;">
<!--                <div class="carousel-caption">-->
<!--                    <h3>Flowers</h3>-->
<!--                    <p>Beautiful flowers in Kolymbari, Crete.</p>-->
<!--                </div>-->
            </div>

            <div class="item">
                <img src="protected/imagenes/img4.jpeg" style="width:700px;height:700px;">
<!--                <div class="carousel-caption">-->
<!--                    <h3>Flowers</h3>-->
<!--                    <p>Beautiful flowers in Kolymbari, Crete.</p>-->
<!--                </div>-->
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
</div>

</body>
</html>
