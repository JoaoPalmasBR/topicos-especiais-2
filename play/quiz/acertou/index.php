<?php
session_start();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>codePRO</title>
    <script>
         setTimeout(
             function(){
                 location.assign('./index2.php');
             },
             5000);
    </script>
    <style>
        html {
            height: 100%;
        }

        body {
            align-items: center;
            background: #000;
            display: flex;
            height: 100%;
            justify-content: center;
            margin: 0;
        }

        .glitch {
            animation: glitch-skew 4s cubic-bezier(0.25, 0.46, 0.45, 0.94) 4s infinite;
            font-family: orbitron, sans-serif;
            font-size: 8rem;
            font-weight: 900;
            line-height: 1;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            transform-origin: center top;
        }
        .glitch__main {
            color: #FFF;
        }
        .glitch__color {
            height: 100%;
            left: 0;
            opacity: 0.8;
            position: absolute;
            top: 0;
            transform-origin: center center;
            width: 100%;
            z-index: -1;
        }
        .glitch__color--red {
            animation: glitch 300ms cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;
            color: red;
        }
        .glitch__color--blue {
            animation: glitch 300ms cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite reverse;
            color: blue;
        }
        .glitch__color--green {
            animation: glitch 300ms cubic-bezier(0.25, 0.46, 0.45, 0.94) 100ms infinite;
            color: #00FF0B;
        }
        .glitch__line {
            animation: glitch-line 2s linear infinite;
            background: #000;
            content: '';
            height: 1px;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }
        .glitch__line--first {
            animation: glitch-line 2s linear infinite;
        }
        .glitch__line--second {
            animation: glitch-line 1s linear 1s infinite;
        }

        @keyframes glitch {
            0% {
                transform: translate(0);
            }
            20% {
                transform: translate(-8px, 8px);
            }
            40% {
                transform: translate(-8px, -8px);
            }
            60% {
                transform: translate(8px, 8px);
            }
            80% {
                transform: translate(8px, -8px);
            }
            100% {
                transform: translate(0);
            }
        }
        @keyframes glitch-skew {
            0% {
                transform: skew(0deg, 0deg);
            }
            48% {
                transform: skew(0deg, 0deg);
                filter: blur(0);
            }
            50% {
                transform: skew(-20deg, 0deg);
                filter: blur(4px);
            }
            52% {
                transform: skew(20deg, 0deg);
            }
            54% {
                transform: skew(0deg, 0deg);
                filter: blur(0);
            }
            100% {
                transform: skew(0deg, 0deg);
            }
        }
        @keyframes glitch-line {
            0% {
                top: 0;
            }
            100% {
                top: 100%;
            }
        }
        .stars {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .stars__star {
            border-radius: 50%;
            box-shadow: 0 0 4px 1px #FFF;
            height: 1px;
            position: absolute;
            width: 1px;
            z-index: 100;
        }
        .stars__star:nth-child(1) {
            top: 34%;
            left: 93%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(2) {
            top: 100%;
            left: 19%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(3) {
            top: 45%;
            left: 63%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(4) {
            top: 69%;
            left: 67%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(5) {
            top: 33%;
            left: 18%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(6) {
            top: 16%;
            left: 58%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(7) {
            top: 100%;
            left: 46%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(8) {
            top: 47%;
            left: 22%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(9) {
            top: 62%;
            left: 79%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(10) {
            top: 36%;
            left: 95%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(11) {
            top: 89%;
            left: 90%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(12) {
            top: 53%;
            left: 88%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(13) {
            top: 1%;
            left: 47%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(14) {
            top: 91%;
            left: 9%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(15) {
            top: 30%;
            left: 77%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(16) {
            top: 92%;
            left: 48%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(17) {
            top: 38%;
            left: 97%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(18) {
            top: 13%;
            left: 23%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(19) {
            top: 4%;
            left: 48%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(20) {
            top: 1%;
            left: 7%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(21) {
            top: 77%;
            left: 37%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(22) {
            top: 84%;
            left: 90%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(23) {
            top: 98%;
            left: 60%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(24) {
            top: 94%;
            left: 54%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(25) {
            top: 72%;
            left: 43%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(26) {
            top: 42%;
            left: 76%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(27) {
            top: 40%;
            left: 85%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(28) {
            top: 30%;
            left: 58%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(29) {
            top: 54%;
            left: 99%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(30) {
            top: 32%;
            left: 17%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(31) {
            top: 32%;
            left: 99%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(32) {
            top: 20%;
            left: 35%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(33) {
            top: 97%;
            left: 46%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(34) {
            top: 64%;
            left: 42%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(35) {
            top: 52%;
            left: 18%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(36) {
            top: 75%;
            left: 94%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(37) {
            top: 50%;
            left: 56%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(38) {
            top: 1%;
            left: 76%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(39) {
            top: 81%;
            left: 43%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(40) {
            top: 96%;
            left: 76%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(41) {
            top: 18%;
            left: 19%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(42) {
            top: 80%;
            left: 51%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(43) {
            top: 39%;
            left: 43%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(44) {
            top: 94%;
            left: 43%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(45) {
            top: 83%;
            left: 30%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(46) {
            top: 18%;
            left: 11%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(47) {
            top: 22%;
            left: 22%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(48) {
            top: 20%;
            left: 24%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(49) {
            top: 75%;
            left: 97%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(50) {
            top: 64%;
            left: 85%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(51) {
            top: 57%;
            left: 36%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(52) {
            top: 49%;
            left: 30%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(53) {
            top: 58%;
            left: 15%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(54) {
            top: 46%;
            left: 61%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(55) {
            top: 57%;
            left: 59%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(56) {
            top: 77%;
            left: 29%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(57) {
            top: 13%;
            left: 83%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(58) {
            top: 62%;
            left: 18%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(59) {
            top: 8%;
            left: 66%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(60) {
            top: 4%;
            left: 46%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(61) {
            top: 80%;
            left: 13%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(62) {
            top: 91%;
            left: 25%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(63) {
            top: 15%;
            left: 60%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(64) {
            top: 29%;
            left: 54%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(65) {
            top: 88%;
            left: 69%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(66) {
            top: 84%;
            left: 100%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(67) {
            top: 12%;
            left: 30%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(68) {
            top: 85%;
            left: 14%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(69) {
            top: 80%;
            left: 36%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(70) {
            top: 63%;
            left: 78%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(71) {
            top: 66%;
            left: 32%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(72) {
            top: 98%;
            left: 89%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(73) {
            top: 78%;
            left: 80%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(74) {
            top: 17%;
            left: 28%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(75) {
            top: 8%;
            left: 69%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(76) {
            top: 79%;
            left: 87%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(77) {
            top: 72%;
            left: 48%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(78) {
            top: 50%;
            left: 60%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(79) {
            top: 99%;
            left: 94%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(80) {
            top: 99%;
            left: 73%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(81) {
            top: 26%;
            left: 15%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(82) {
            top: 29%;
            left: 46%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(83) {
            top: 6%;
            left: 95%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(84) {
            top: 62%;
            left: 93%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(85) {
            top: 6%;
            left: 9%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(86) {
            top: 30%;
            left: 11%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(87) {
            top: 49%;
            left: 46%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(88) {
            top: 7%;
            left: 43%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(89) {
            top: 63%;
            left: 19%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(90) {
            top: 64%;
            left: 60%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(91) {
            top: 99%;
            left: 42%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(92) {
            top: 8%;
            left: 29%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(93) {
            top: 13%;
            left: 54%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(94) {
            top: 59%;
            left: 74%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(95) {
            top: 4%;
            left: 90%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(96) {
            top: 53%;
            left: 11%;
            box-shadow: 0 0 4px 3px #FFF;
        }
        .stars__star:nth-child(97) {
            top: 5%;
            left: 18%;
            box-shadow: 0 0 4px 2px #FFF;
        }
        .stars__star:nth-child(98) {
            top: 76%;
            left: 87%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(99) {
            top: 38%;
            left: 99%;
            box-shadow: 0 0 4px 1px #FFF;
        }
        .stars__star:nth-child(100) {
            top: 31%;
            left: 38%;
            box-shadow: 0 0 4px 2px #FFF;
        }

    </style>
</head>
<body>

<div class="glitch" data-text="Strobocops">

    <span class="glitch__color glitch__color--red">Certo</span>
    <span class="glitch__color glitch__color--blue">Certo</span>
    <span class="glitch__color glitch__color--green">Certo</span>

        <span class="glitch__main">Certo</span>
    <span class="glitch__line glitch__line--first"></span>
    <span class="glitch__line glitch__line--second"></span>
</div>


<div class="stars">
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
    <div class="stars__star"></div>
</div>
</body>
</html>
