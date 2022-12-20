<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Tic Tac Toe</title>
    <style>
        body {
            background: teal;
        }
        main {
            overflow: hidden;
        }
        main {
            position: relative;
            background: linear-gradient(270deg ,rgb(110, 110, 110),black);
            height: 100%;
            border-radius: 30px;
            box-shadow: 1px 1px 5px black,
            -2px -2px 9px white;
        }
        .top__score-main article {
            display: block;
            gap: 10px;
        }
        article {
            color: white;
        }
        .top__score-main {
            position: absolute;
            display: grid;
            row-gap: 50px;
        }
        .pulse {
            animation: pulse 0.5s cubic-bezier(0.42, 0, 0.4, 1.38) forwards ;
        }
        @keyframes pulse {
            0%{
                transform: scale(1);
            }
            50%{
                transform: scale(1.1);
                box-shadow: inset 2px 2px 10px white,
                inset -2px -2px 10px black;
            }
            100%{
                transform: scale(1);

            }
        }
        .scaleFont {
            animation: scaleFont 0.5s cubic-bezier(0.42, 0, 0.4, 1.38) forwards ;
        }
        @keyframes scaleFont {
            0%{
                font-size: 40px;
            }
            50%{
                font-size: 50px;
            }
            100%{
                font-size: 40px;
            }
        }
        .cell{
            cursor: pointer;
            font-size: 100px;
            border-radius: 15px;
            margin: 10px 0px;
            width: 170px;
            height: 170px;
            background: white;
            box-shadow: 1px 1px 5px black,
            -2px -2px 2px white;
        }
        .board {
            border-radius: 30px;
            padding: 10px 0px;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            overflow: hidden;
            box-shadow: 1px 1px 5px black,
            -2px -2px 3px white;
        }

        .intro {
            animation: spinIntro 0.4s forwards cubic-bezier(0.42, 0, 0.4, 1.38);
        }
        @keyframes spinIntro {
            0%{
                opacity: 0;
                transform: rotate(-90deg);
            }
            100%{
                opacity: 1;
                transform: rotate(0);
            }
        }
        .outro {
            animation: spinOutro 0.4s forwards cubic-bezier(0.42, 0, 0.4, 1.38) ,
            spinIntro 0.4s forwards cubic-bezier(0.42, 0, 0.4, 1.38);
        }
        @keyframes spinOutro {
            0%{
                opacity: 0;
                transform: rotate(0deg);
            }
            100%{
                opacity: 1;
                transform: rotate(90);
            }
        }
        .side {
            text-align: center;
        }
        .xo{
            font-size: 130px;
            height: 40%;
            box-shadow: 1px 1px 5px black,
            -3px -2px 4px white;
        }
        .xScore , .oScore {
            padding:5px;
            border-radius: 2px;
            align-items: end;
        }
        .high__score {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 20px;
            position: absolute;
            top:10px ;
            left: 20vw;
            color: white;
        }
        #scoreX , #scoreO {
            margin: auto 0 auto 20px ;
            font-size: 1.5rem;
            opacity: 0;
            animation: intro 2s forwards ease-out;
        }
        @keyframes intro {
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }

        @media screen and (min-width:400px) and(max-width: 600px){
            .cell {
                margin: 5px 5px;
                width: 130px;
                height: 130px;
                font-size: 70px
            }

            .top__score-main{
                display: inline
            }
        }
        @media screen and (min-width:420px) and  (max-width: 539px){
            .cell {
                margin: 5px 5px;
                width: 120px;
                height: 120px;
                font-size: 70px
            }
        }
        @media screen and (max-width:419px) {
            .cell {
                margin: 5px 5px;
                width: 85px;
                height: 85px;
                font-size: 50px
            }
        }
        @media screen and (min-width:601px) and (max-width:1000px) {
            .cell {
                width: 150px;
                height: 150px;
            }

        }
        @media screen and (max-width:960px) {
            main {
                min-height: 90vh;
            }
            .top__score-main {
                position: fixed;
                grid-template-columns: auto auto auto;
                justify-content: space-around;
                align-items: center;
                left: 0;
                right: 0;
                bottom: 10%;
                align-items: center;
            }
            .high__score {
                bottom: 1vh ;
                left: 0;
                top:unset;
                text-align: center;
                width: 100vw;
                margin: auto;
                justify-content: space-evenly;
            }
            #result {
                padding: 20px 0!important;
                width: 75px!important;
                font-size: 20px!important;
            }
        }
        #result {
            border-radius: 90px;
            padding: 25px;
            text-align: center;
            max-width: 150px;
            min-width: 100px;
            color: white;
            font-size: 30px;
            box-shadow: inset 2px 2px 5px white,
            inset -2px -2px 5px black;
            text-align: center;
        }
        #reld {
            border-radius: 30px;
            width: 60px;
            background-color: greenyellow;
            transition: 0.5s;
        }
        #reld:hover {
            background-color: rgb(138, 206, 37);
            transform: scale(1.1);
        }
        #reld svg {
            transition: 0.5s;
        }
        #reld:hover svg {
            transform: rotate(1turn);
        }
    </style>
</head>

<body onload="findScore()">
<a class="btn btn-dark position-fixed end-0 top-0 m-2" href="/">Back</a>
<!--audios-->
<audio id="xsound" src="./sound/mixkit-select-click-1109.wav"></audio>
<audio id="osound" src="./sound/mixkit-click-error-1110.wav"></audio>
<audio id="draw" src="./sound/mixkit-game-over-trombone-1940.wav"></audio>
<audio id="winsound" src="./sound/mixkit-fantasy-game-success-notification-270.wav"></audio>
</div>
<div class="high__score">

</div>
<!--score-->
<main class="container mt-4 py-3 ">
    <section  class="top__score-main text-center">
        <div class="mt-3">
            <button type="button" class="btn btn-danger" id="resetScore" onclick="reseter()">Reset</button>
            <article class="pt-3">
                <div class="d-flex oScore">
                    <h5>O : </h5>
                    <div id="scoreO"></div>

                </div>
                <div class="d-flex xScore">
                    <h5>X : </h5>
                    <div id="scoreX"></div>
                </div>
            </article>
        </div>
        <div id="result" class=" pulse" >X turn</div>
        <div class="text-center">
            <buttom id="reld" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                </svg>
            </buttom>
        </div>
    </section>
<!-- board-->
    <section class="row justify-content-center">
        <div class="col-md-9 col-lg-7 col side ">
            <article class="board intro" id="board">
                <div id='one' Condition='rdy' mode='white' class="cell"></div>
                <div id='two' Condition='rdy' mode='white' class="cell"></div>
                <div id='three' Condition='rdy' mode='white' class="cell"></div>
                <div id='four' Condition='rdy' mode='white' class="cell"></div>
                <div id='five' Condition='rdy' mode='white' class="cell"></div>
                <div id='six' Condition='rdy' mode='white' class="cell"></div>
                <div id='seven' Condition='rdy' mode='white' class="cell"></div>
                <div id='eight' Condition='rdy' mode='white' class="cell"></div>
                <div id='nine' Condition='rdy' mode='white' class="cell"></div>
            </article>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script>
    const xsound = document.getElementById('xsound')
    const osound = document.getElementById('osound')
    const winsound = document.getElementById('winsound')
    const draw = document.getElementById('draw')
    const highScoreO = document.getElementById('scoreO')
    const highScoreX = document.getElementById('scoreX')
    const board = document.getElementById("board")
    let box = $('.cell')
    let reld = document.getElementById('reld')
    let xWinScore = localStorage.getItem('xWins')
    let oWinScore = localStorage.getItem('oWins')
    let result = document.getElementById('result')
    var scoreCheck = 0

    window.onload = function () {
        highScoreO.append(oWinScore)
        highScoreX.append(xWinScore)
        setTimeout(function intro() {
            board.classList.remove("intro")
            result.classList.remove("pulse")
        } , 500)
    }

    function rd(e) {
        e.preventDefault()
        $('.cell').text( ' ')
        $('.cell').css('backgroundColor', 'white');
        $('.cell').attr("Condition", "rdy")
        $('.cell').attr("mode", "white")
        $('.cell').attr("place", " ")
        $('body').css('backgroundColor', 'teal')
        $('#result').css('backgroundColor', 'teal')
        result.innerText = 'X turn ';
        scoreCheck = 0
        board.classList.add("intro")
        result.classList.add("pulse")
        setTimeout(function intro() {
            board.classList.remove("intro")
            result.classList.remove("pulse")
        } , 500)
        findScore
        // location.reload()
    }
    function findScore () {
        if (!xWinScore) {
            highScoreX.append(0)
        }
        if (!oWinScore) {
            highScoreO.append(0)
        }
        if (xWinScore) {
            highScoreX.append(xWinScore)
        }
        if (oWinScore) {
            highScoreO.append(oWinScore)
        }
    }
    function reseter () {
        highScoreO.innerText = 0
        highScoreX.innerText = 0
        localStorage.setItem("oWins", 0)
        localStorage.setItem("xWins", 0)
        $('#result').attr("state", " ")
        scoreCheck = 1
        xWinScore = 0
        oWinScore = 0
    }


    reld.addEventListener('click', rd)
    $('.cell').on("click", function () {
        if ($(this).attr("mode") === "white" & $(this).attr("Condition") !== "checkx" & $(this).attr("Condition") !== "checko") {
            $(this).css('backgroundColor', 'teal'),
                $('.cell').attr("mode", "teal"),
                this.innerText = 'X'
            $(this).attr("Condition", "checkx"),
                $(this).attr("place", "used")
            $('#result').text('O')
            $('#result').css('backgroundColor', 'crimson')
            $('body').css('backgroundColor', 'crimson')
            winner()
            xsound.play()
        }
        else if ($(this).attr("mode") === "teal" & $(this).attr("Condition") !== "checkx" & $(this).attr("Condition") !== "checko") {
            $(this).css('backgroundColor', 'crimson'),
                $('.cell').attr("mode", "white"),
                this.innerText = 'O'
            $(this).attr("Condition", "checko")
            $(this).attr("place", "used")
            $('#result').text('X')
            $('#result').css('backgroundColor', 'teal')
            $('body').css('backgroundColor', 'teal')
            winner()
            osound.play()
        }
    })

    function winner() {
        if ($('#one').attr('condition') === 'checkx' & $('#two').attr('condition') === 'checkx' & $('#three').attr('condition') === 'checkx' ||
            $('#one').attr('condition') === 'checkx' & $('#five').attr('condition') === 'checkx' & $('#nine').attr('condition') === 'checkx' ||
            $('#one').attr('condition') === 'checkx' & $('#four').attr('condition') === 'checkx' & $('#seven').attr('condition') === 'checkx' ||
            $('#four').attr('condition') === 'checkx' & $('#five').attr('condition') === 'checkx' & $('#six').attr('condition') === 'checkx'||
            $('#seven').attr('condition') === 'checkx' & $('#eight').attr('condition') === 'checkx' & $('#nine').attr('condition') === 'checkx'||
            $('#seven').attr('condition') === 'checkx' & $('#eight').attr('condition') === 'checkx' & $('#nine').attr('condition') === 'checkx' ||
            $('#three').attr('condition') === 'checkx' & $('#five').attr('condition') === 'checkx' & $('#seven').attr('condition') === 'checkx'||
            $('#two').attr('condition') === 'checkx' & $('#five').attr('condition') === 'checkx' & $('#eight').attr('condition') === 'checkx'||
            $('#three').attr('condition') === 'checkx' & $('#six').attr('condition') === 'checkx' & $('#nine').attr('condition') === 'checkx')  {
            $('#result').text('X win')
            $('#result').css('backgroundColor', 'teal')
            $('body').css('backgroundColor', 'teal')
            $('.cell').attr("mode", "none")
            winsound.play()
            if(scoreCheck === 1) {
                localStorage.setItem("xWins", 1)
                highScoreX.innerText = 1
                scoreCheck = 0
            } else {
                localStorage.setItem("xWins", ++xWinScore)
                highScoreX.innerText = xWinScore
                scoreCheck = 0

            }
        }

        else if ($('#one').attr('condition') === 'checko' & $('#two').attr('condition') === 'checko' & $('#three').attr('condition') === 'checko' ||
            $('#one').attr('condition') === 'checko' & $('#five').attr('condition') === 'checko' & $('#nine').attr('condition') === 'checko' ||
            $('#one').attr('condition') === 'checko' & $('#four').attr('condition') === 'checko' & $('#seven').attr('condition') === 'checko' ||
            $('#four').attr('condition') === 'checko' & $('#five').attr('condition') === 'checko' & $('#six').attr('condition') === 'checko' ||
            $('#seven').attr('condition') === 'checko' & $('#eight').attr('condition') === 'checko' & $('#nine').attr('condition') === 'checko' ||
            $('#seven').attr('condition') === 'checko' & $('#eight').attr('condition') === 'checko' & $('#nine').attr('condition') === 'checko' ||
            $('#three').attr('condition') === 'checko' & $('#five').attr('condition') === 'checko' & $('#seven').attr('condition') === 'checko' ||
            $('#two').attr('condition') === 'checko' & $('#five').attr('condition') === 'checko' & $('#eight').attr('condition') === 'checko' ||
            $('#three').attr('condition') === 'checko' & $('#six').attr('condition') === 'checko' & $('#nine').attr('condition') === 'checko' ) {
            $('#result').text('O win')
            $('#result').css('backgroundColor', 'crimson')
            $('body').css('backgroundColor', 'crimson')
            $('.cell').attr("mode", "none")
            winsound.play()
            if (scoreCheck === 1) {
                localStorage.setItem("oWins", 1)
                highScoreO.innerText = 1
                scoreCheck = 0
            } else {
                localStorage.setItem("oWins", ++oWinScore)
                highScoreO.innerText = oWinScore
                scoreCheck = 0
            }
        }

        else if ($('#one').attr('place') === 'used' &
            $('#two').attr('place') === 'used' & $('#three').attr('place') === 'used' &
            $('#four').attr('place') === 'used' & $('#five').attr('place') === 'used' &
            $('#six').attr('place') === 'used' & $('#seven').attr('place') === 'used' &
            $('#eight').attr('place') === 'used' & $('#nine').attr('place') === 'used') {
            result.innerText = 'Draw',
                $('.cell').attr("mode", "none"),
                $('body').css('backgroundColor', 'dimgray')
            $('#result').css('backgroundColor', 'dimgray')
            draw.play()
            scoreCheck = 0
        }
    }

</script>
</body>

</html>