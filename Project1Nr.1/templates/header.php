<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="bg-light" style="height:100vh">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <embed src="white_logo_transparent_background.png" width="110" height="130">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=clients">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/?action=order">Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <style>
        body {
            margin: 0;
        }

        .wrapper {
            display: flex;
            height: 20vh;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .button {
            border: 1px transparent;
            -webkit-border-radius: 40px;
            border-radius: 40px;
            color: #eeeeee;
            cursor: pointer;
            display: inline-block;
            font-family: Arial;
            font-size: 20px;
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            margin-left: 20px;
            -webkit-animation: glowing 1300ms infinite;
            -moz-animation: glowing 1300ms infinite;
            -o-animation: glowing 1300ms infinite;
            animation: glowing 1300ms infinite;
        }

        @-webkit-keyframes glowing {
            0% {
                background-color: #0091b2;
                -webkit-box-shadow: 0 0 3px #0091b2;
            }
            50% {
                background-color: #21c7ed;
                -webkit-box-shadow: 0 0 15px #21c7ed;
            }
            100% {
                background-color: #0091b2;
                -webkit-box-shadow: 0 0 3px #0091b2;
            }
        }

        @keyframes glowing {
            0% {
                background-color: #0091b2;
                box-shadow: 0 0 3px #0091b2;
            }
            50% {
                background-color: #21c7ed;
                box-shadow: 0 0 15px #21c7ed;
            }
            100% {
                background-color: #0091b2;
                box-shadow: 0 0 3px #0091b2;
            }
        }

        .embed-btn {
            display: block;
            width: 230px;
            height: 230px;
            margin-left: 10px;
        }

        embed {
            fill: blue;
            -webkit-animation: glowing-embed 1300ms infinite;
            -moz-animation: glowing-embed 1300ms infinite;
            -o-animation: glowing-embed 1300ms infinite;
            animation: glowing-embed 1300ms infinite;
        }

        @-webkit-keyframes glowing-embed {
            0% {
                fill: #0091b2;
                -webkit-filter: drop-shadow(0 0 3px #0091b2);
            }
            50% {
                fill: #21c7ed;
                -webkit-filter: drop-shadow(0 0 15px #21c7ed);
            }
            100% {
                fill: #0091b2;
                -webkit-filter: drop-shadow(0 0 3px #0091b2);
            }
        }

        @keyframes glowingEmbed {
            0% {
                fill: #0091b2;
                filter: drop-shadow(0 0 3px #0091b2);
            }
            50% {
                fill: #21c7ed;
                filter: drop-shadow(0 0 15px #21c7ed);
            }
            100% {
                fill: #0091b2;
                filter: drop-shadow(0 0 3px #0091b2);
            }
        }
    </style>
