<?php require 'vendor/autoload.php';
if (!\smnbots\Auth::getInstance()->isLoggedIn()){
    header('Location: login');
}
if (\smnbots\Bot::hostOnline()){
    header('Location: dashboard');
}?>
<!DOCTYPE html>
<html lang="de">

<head>
	<script src="https://wchat.freshchat.com/js/widget.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Maintenance | <?= NEW_SITENAME; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            position: relative;
            height: 100vh;
            background-image: url("assets/img/bg.jpeg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            text-align: center;
        }

        .notfound .notfound-404 {
            position: relative;
            height: 180px;
            margin-bottom: 20px;
            z-index: -1;
        }

        .notfound .notfound-404 h1 {
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50% , -50%);
            -ms-transform: translate(-50% , -50%);
            transform: translate(-50% , -50%);
            font-size: 224px;
            font-weight: 900;
            margin-top: 0;
            margin-bottom: 0;
            margin-left: -12px;
            color: #030005;
            text-transform: uppercase;
            text-shadow: -1px -1px 0 #8400ff, 1px 1px 0 #ff005a;
            letter-spacing: -20px;
        }


        .notfound .notfound-404 h2 {
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            left: 0;
            right: 0;
            top: 110px;
            font-size: 42px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 2px 0 #8400ff;
            letter-spacing: 13px;
            margin: 0;
        }

        .notfound a {
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
            text-transform: uppercase;
            color: #ff005a;
            text-decoration: none;
            border: 2px solid;
            background: transparent;
            padding: 10px 40px;
            font-size: 14px;
            font-weight: 700;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .notfound a:hover {
            color: #8400ff;
        }

        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 h2 {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound .notfound-404 h1 {
                font-size: 182px;
            }
        }

    </style>
</head>
<body>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>MAINTAINCE</h1>
            <h2>WE HAVE GOOD NEWS FOR YOU!</h2>
        </div>
    </div>
</div>
</body>
</html>
