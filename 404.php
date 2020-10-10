<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>404</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    .error-page{
        width: 100vw;
        height: 100vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .text{
        color: #000;
        text-align: center;
        font-size: 40px;
        position: relative;
        margin-bottom: 40px;
    }
    .text span{
        display: block;
        font-size: 400px;
        font-weight: bold;
        line-height: 1;
    }
    .paint{
        width: 280px;
        height: 400px;
        position: absolute;
        top: calc(25% - 200px);
        left: calc(50% - 140px);
        background-position: center;
        background-repeat: no-repeat;
    }
    .button{
        width: fit-content;
        font-size: 18px;
        background-color: #FEE600;
        padding: 0 36px;
        height: 54px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000000;
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;
        text-decoration: none;
    }
    .button:hover{
        background-color: #FFF167;
    }
    @media screen and (max-width: 760px){
        .text{
            font-size: 20px;
            margin-bottom: 15px;
        }
        .text span{
            font-size: 180px;
        }
        .paint{
            width: 200px;
            height: 200px;
            position: absolute;
            top: calc(30% - 100px);
            left: calc(50% - 100px);
            background-size: contain;
        }
    }
</style>
<body>
    <div class="error-page" style="background-image: url(<?php get_uri('img/404/404-bg.png')?>)">
        <div class="text">
            <div class="paint" style="background-image: url(<?php get_uri('img/404/404-paint.png')?>)"></div>
            <span>404</span>
            Ошибка! Вернитесь на главную!
        </div>
        <a href="/" class="button">На главную</a>
    </div>
</body>
</html>

