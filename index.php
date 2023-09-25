<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./app/assets/style/index.css">
    <link rel="stylesheet" href="./app/assets/style/index_underBLock.css">
    <title>Главная страница</title>
</head>
<body>
    <div class="container">
        <div class="shapka">
            <h2 class="text_shapka logo">Orent</h2>
            <a href='./app/views/users/registration.php' class="text_shapka">sign up</a>
            <a href="#" class="text_shapka">magazine</a>
            <a href="#" class="text_shapka">illustration</a>
            <a href="#" class="text_shapka">profile</a>

        </div>
        <div class="wtf_block">
            <h1 class="first_text">One of kind</h1>
        </div>
        <div class="underBlock" style="
        font-family: Poetsen One;
">              <div class="firstUnder">
<!--            <img src="" alt="">-->
            <div class="text_underBlock">
            <p class="iphone15">the Iphone 15</p>
            <p class="desc">iphone - is very<br>comfortable<br>smartphone. People use<br>this device and have a <br>more happy, at least<br>price is high it s dont<br>problem for by it</p>
            <p class="fistPrice">1299</p>
            <p class="price">999$</p>
            </div>

                <div class="secondUnder">
                    <img src="" alt="nike">
                    <p class="nike">Nike dunk</p>
                    <p class="desc_nike">Nike dunk is very comfortable shoes<br>, i can to say only some word<br>, and i say Just do it!<br></p>
                    <p class="price_nike_first">450$</p>
                    <p class="price_nike">390$</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
