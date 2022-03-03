<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Game Over</title>
    <style>
        .main {
            display:flex;
            justify-content:center;
            align-items:center
        }
        .game-over-info {
            font-size: 1.7rem;
            color:white;
            text-align:center;
            margin-top:25%;
        }
        body {
            background: url(./img/background.jpg) no-repeat center center/cover;
            height:50vh;
        }
    </style>
</head>
<body>

    <?php
        session_start();
        $player_1 = $_SESSION['var1'];
        $player_2 = $_SESSION['var2'];
        $cookieValue = $_COOKIE['var3'];
        $tie = $_COOKIE['tie'];
        if($tie == "Game over. Tie!"){
            $winner = 'nu a castigat nimeni -> egalitate :)';
        } else {
            if($cookieValue == "Orange") {
                $winner = 'a castigat ' . $player_1;
            } else {
                $winner = 'a castigat ' . $player_2;
            }
        }
    ?>

    <main>
        <p class="game-over-info"><?php echo $player_1 . ' s-a batut cu ' . $player_2 . '. In urma meciului, ' . $winner ?></p>
    </main>
    <!-- Load js file at end -->
    <script src="./js/functions.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>