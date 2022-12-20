<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./duckHunt.css">
    <link href="../../webDesign/Web 1/Font/css/all.css" rel="stylesheet">
    <style>
        .dog {
            position: absolute;
            bottom:5%;
            width: 175px;
            height: 157px;
            background: url(./image/01t.png);
            background-repeat: no-repeat;
            animation: walk 6.5s ;
            animation-timing-function: ease;
            animation-delay: 0.5s;
            animation-fill-mode: forwards;
            background-repeat: no-repeat;
            background-size: 100%;
            z-index: 0;
            user-select: none;
        }
        @keyframes walk {
            10% {
                background: url(./image/02t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(40px);
            }
            20% {
                background: url(./image/03t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(80px);

            }
            30% {
                background: url(./image/04t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(120px);

            }
            40% {
                background: url(./image/03t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(160px);

            }
            50% {
                background: url(./image/04t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(200px);

            }
            60% {
                background: url(./image/03t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(240px);

            }
            70% {
                background: url(./image/04t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(280px);

            }
            80% {
                background: url(./image/05t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(320px);

            }
            90% {
                background: url(./image/06t.png);
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(460px)translateY(-170px);

            }
            100% {
                background: transparent;
                background-repeat: no-repeat;
                background-size: 100%;
                transform: translateX(480px)translateY(-130px);

            }
        }
        :root{
            max-width: 100%;
            max-height: 100%;
        }
        body{
            background-color: black;
        }
        .board {
            position: relative;
            margin: auto;
            max-width: 85%;
            height:750px;
            background: url(./image/stage.png);
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 1;
            user-select: none;
        }
        .green {
            color: rgb(30, 236, 30) !important;
        }
        .duck {
            cursor: crosshair;
            position: absolute;
            visibility: hidden;
            width: 112px;
            height: 112px;
            background: url(./image/duckt.png);
            transition-timing-function: unset;
            background-repeat: no-repeat;
            background-size: 100%;
            z-index: 2;
        }
        .fas {
            font-size: 2rem;
            margin: 0 0.5rem;
            transition: 1s;
            animation: live 2s ;
            animation-timing-function: ease;
            animation-fill-mode: forwards;
            background-repeat: no-repeat;
        }
        @keyframes live {

            10% { transform: scale(0.8);
                color: rgb(240, 77, 77);
            }
            50% { transform: scale(1.4);
                color: rgb(136, 20, 20);
            }
            100% { transform: scale(1)
            }

        }
        .score {
            transition: 0.5s;
            font-weight: bold;
            padding: 0.5rem;
            color: white;
            font-size: 50px;
            user-select: none;
        }
        .scoreBounce {
            animation: score 1s ;
            animation-timing-function: ease;
            animation-fill-mode: forwards;
            background-repeat: no-repeat;
        }
        @keyframes score {
            0%{
                border: 25px dashed rgb(250, 44, 44);
                border-radius: 100%;
                padding: 0.5rem;
            }
            100%{
                border: 0;
            }

        }
        .upScore {
            transition: 0.5s;
            transform: scale(2);
        }
        .highScore {
            color: rgb(255, 255, 255);
            font-size: 20px;
            padding-left: 1rem;
            font-weight: bold;
            opacity: 80%;
            user-select: none;
        }
        .lose {
            position: absolute;
            top: 0px;
            width: 100%;
            height: 80%;
            background-color: transparent;
            z-index: 1;
            user-select: none;
        }
        .loseHeat {
            background-color: red;
            opacity: 45%;
        }
        .live {
            margin-left: 30px;
            color: red;
            font-size: 30px;
            user-select: none;
        }
        .tit {
            margin: auto;
            width: 600px;
            height: 600px;
            background-color: transparent;
            color: red;
            font-size: 120px;
            font-weight: bolder;
            user-select: none;
        }
        .go {
            position: absolute;
            top: 20%;
            left: 40%;
            background-color: transparent;
            color: red;
            font-weight: bolder;
            user-select: none;
            z-index: 0;
            border: 15px solid red;
            border-radius: 100%;
            padding: 1rem;
            visibility: hidden;
            animation: intro 0.7s ;
            animation-delay: 6.5s;
            animation-timing-function: linear;
        }
        @keyframes intro {
            0%{
                font-size: 10px;
            }
            100%{
                font-size: 150px;
            }

        }
        .title {
            font-size: 70px;
            position: absolute;
            top: 20%;
            left: 12%;
            color: white;
            font-weight: bold;
            z-index: 0;
            text-shadow: 0 5px black;
        }
        @media screen and (max-width:1200px) {
            @keyframes intro {
                0%{
                    font-size: 10px;
                }
                100%{
                    font-size: 100px;
                }
            }
            .title {
                text-shadow: 0 2px black;
                font-size: 30px;
                top: 30%;
                left: 20%;}
            .go {
                font-size: 90px;
            }
            .fas {
                font-size: 1rem;
                margin: 0 0.3rem;
            }
            .tit {
                width: 400px;
                height: 200px;
                font-size: 80px;
            }
            .duck {
                width: 60px;
                height: 60px;
            }
            .score {
                font-size: 25px;
            }
            .highScore {
                font-size: 15px;
            }
            .live {
                font-size: 20px;
            }
            .dog {
                width: 70px;
                top: 70%;
            }
            html {
                margin-top: 5px;
                margin-bottom: 0;
                width: 100vh;
                max-height: 55vh;
                transform: rotate(90deg);
            }
            body {

                width: 100vh;
                max-height: 55vh;
            }
            .board{
                margin: 0;
                width: 100vh;
                max-height: 50vh;

            }
            @keyframes score {
                0%{
                    border: 15px dashed rgb(250, 44, 44);
                    border-radius: 100%;
                    padding: 0.2rem;
                }
                100%{
                    border: 0;
                }

            }
            @keyframes walk {
                10% {
                    background: url(./image/02t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(10px);
                }
                20% {
                    background: url(./image/03t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(30px);

                }
                30% {
                    background: url(./image/04t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(50px);

                }
                40% {
                    background: url(./image/03t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(60px);

                }
                50% {
                    background: url(./image/04t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(80px);

                }
                60% {
                    background: url(./image/03t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(100px);

                }
                70% {
                    background: url(./image/04t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(120px);

                }
                80% {
                    background: url(./image/05t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(140px);

                }
                90% {
                    background: url(./image/06t.png);
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(140px)translateY(-50px);

                }
                100% {
                    background: transparent;
                    background-repeat: no-repeat;
                    background-size: 100%;
                    transform: translateX(140px)translateY(-30px);

                }
            }
        }
    </style>
    <title>Duck Hunt</title>
</head>

<body>
<main id="brd" class="board">
    <div id="go" class="go">GO</div>
    <div id="title" class="title">Shoot the Duck to Score Points</div>
    <div id="losing" class="lose"></div>
    <div id="sco" class="score">Score : </div>
    <div id="hsco" class="highScore">High Score : </div>
    <div id="hrt" class="live"><i class="fas fa-heart"></i><i class="fas fa-heart"></i><i class="fas fa-heart"></i></div>
    <div class="dog"></div>
    <div id="dk" class="duck"></div>
</main>
<audio id="theme" src="./Sound/duck-hunt-intro.mp3" autoplay></audio>
<audio id="myAudio" src="./Sound/gun-shot.mp3"></audio>
<audio id="caught" src="./Sound/dog-laughing.mp3"></audio>
<audio id="ls" src="./Sound/lose.mp3"></audio>
<audio id="score" src="./Sound/duck-caught.mp3"></audio>
<audio id="flapping" src="./Sound/duck-flapping.mp3"></audio>
<audio id="bounce" src="./Sound/bounce.mp3"></audio>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script>

    let score = 0
    let find = 0
    let num = 0
    let i
    let speed = 1000
    let time = 2
    let counter = localStorage.length
    const heart = document.getElementById('hrt')
    let sco = document.getElementById('sco')
    let HighScore = document.getElementById('hsco')
    const caught = document.getElementById('caught')
    const ls = document.getElementById('ls')
    const board = document.getElementById('brd')
    const sce = document.getElementById('score')
    const flap = document.getElementById('flapping')
    const lose = document.getElementById('losing')
    const bounce = document.getElementById('bounce')
    const duck = document.getElementById('dk')
    sco.append(score)
    $('#dk').css('transition', `${time}s`)
    const allScore = []
    window.onload = function () {
        setTimeout(function () {
            $('#go').css('visibility', 'visible');
            $('#title').css('visibility', 'hidden');
        }, 6500);

        setTimeout(function () {
            $('#go').css('visibility', 'hidden')
        }, 7000);

        setTimeout(func1, 7500);

        function allStorage() {
            for (let i = 0; i<localStorage.length; i++) {
                allScore[i] = localStorage.getItem(i);  }
        }
        allStorage();
        let findHigh = Number(Math.max(...allScore))
        HighScore.append(findHigh);
    }

    const x = document.getElementById("myAudio")
    function srd() {
        $('#dk').toggleClass('scoreBounce')

        setTimeout(function () {
            $('#dk').removeClass('scoreBounce');
        }, 700);
        x.play();
        sco.removeChild(sco.childNodes[1]);
        score += 10
        sco.append(score)
        if ((score === 100 && find > 0) || (score === 200 && find > 0 )||
            (score === 300 && find > 0) || (score === 400 && find > 0) ||
            (score === 500 && find > 0 )|| (score === 600 && find > 0) ||
            (score === 600 && find > 0) || (score === 700 && find > 0) ||
            (score === 800 && find > 0) || (score === 800 && find > 0)
            || (score === 900 && find > 0) || (score === 1000 && find > 0)
            || (score === 1100 && find > 0) || (score === 1200 && find > 0)
            || (score === 1300 && find > 0) || (score === 1400 && find > 0)) {
            heart.removeChild(heart.lastChild)
            sce.play();
            find--
            speed -= 100
            time -= 0.1
            let hb = document.createElement('i');
            hb.classList = ('fas fa-heart');
            heart.prepend(hb)
        }
        else if ((score === 100 && find === 0)  || (score === 200 && find === 0) ||
            (score === 300 && find === 0) || (score === 400 && find === 0) || (score === 500 && find === 0) ||
            (score === 600 && find === 0) || (score === 700 && find === 0) || (score === 800 && find === 0) ||
            (score === 900 && find === 0) || (score === 1000 && find === 0)  || (score === 1100 && find === 0) ||
            (score === 1200 && find === 0) || (score === 1300 && find === 0) || (score === 1400 && find === 0)
            || (score === 1500 && find === 0) || (score === 1600 && find === 0) || (score === 1700 && find === 0)){
            bounce.play()
            speed -= 100
            score += 20
            sco.removeChild(sco.childNodes[1]);
            sco.append(score)
            $('#sco').toggleClass('green')
            setTimeout(function () {
                $('#sco').removeClass('green');
            }, 500);
            time -= 0.1
        }
    }

    function func1() {
        $('#dk').css('visibility', 'visible');
        flap.play();
    }

    function change() {
        var bodyWidth = board.clientWidth
        var bodyHeight = board.clientHeight;
        var randPosX = Math.floor((Math.random() * bodyWidth));
        var randPosY = Math.floor((Math.random() * bodyHeight / 2));
        $('#dk').css('left', randPosX);
        $('#dk').css('top', randPosY);
        if (randPosX < bodyWidth / 2) {
            num = 180
        }
        else if (randPosX > bodyWidth / 2) {
            num = 0
        };
        $('#dk').css('transform', `rotateY(${num}deg)`);
    }
    $('#dk').on('click', change);
    setInterval(function () {
        change();
    }, speed);

    setTimeout(() => {
        $('#dk').click(srd);
        $('#losing').click(loser)
    }, 7000);

    function loser() {
        heart.removeChild(heart.firstChild)
        let ht = document.createElement('i');
        ht.classList = ('fas fa-heart-broken');
        heart.append(ht)
        find++
        $('#losing').toggleClass('loseHeat')

        setTimeout(function () {
            $('#losing').removeClass('loseHeat');
        }, 500);
        caught.play()
        if (find === 3) {
            const tit = document.createElement('div')
            tit.innerText = 'YOU LOSE'
            tit.classList = "tit"
            ls.play()
            lose.remove();
            duck.remove();
            $('#go').css('visibility', 'hidden')
            board.append(tit)
            localStorage.setItem((counter), score)
            setTimeout(function () {
                location.reload()
            }, 2000)
        }
    }
</script>
</body>

</html>