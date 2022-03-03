<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Gameplay - Freshbyte Intern</title>
</head>
<body>
    <main class="main">
        <table style="width: 100px;" border="1" cellpadding="20">
            <tbody>
                <tr>
                    <td id="1.1">&nbsp;</td>
                    <td id="1.2">&nbsp;</td>
                    <td id="1.3">&nbsp;</td>
                </tr>
                <tr>
                    <td id="2.1">&nbsp;</td>
                    <td id="2.2">&nbsp;</td>
                    <td id="2.3">&nbsp;</td>
                </tr>
                <tr>
                    <td id="3.1">&nbsp;</td>
                    <td id="3.2">&nbsp;</td>
                    <td id="3.3">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <form method="post">
            <input id="button-game" type="submit" value="Finish" name="game_winner">
            <p id="game_winner" name="game_winner"></p>
        </form>
    </main>
    <!-- Load js file at end -->
    <script src="./js/functions.js"></script>
    <script src="./js/app.js"></script>
    <?php
        session_start();
        include("../backend/connection.php");
        include("../backend/functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            // Using session/cookie variables for other variables
            $player_1 = $_SESSION['var1'];
            $player_2 = $_SESSION['var2'];
            $cookieValue = $_COOKIE['var3'];
            $tie = $_COOKIE['tie'];

            if($tie == "Game over. Tie!"){
                $winner = 'Egalitate';
            } else {
                if($cookieValue == "Orange") {
                    $winner = $player_1;
                } else {
                    $winner = $player_2;
                }
            }
            $query = "INSERT INTO game (player1, player2, status, winner) VALUES ('$player_1','$player_2','finished', '$winner')";
            mysqli_query($con, $query);

            header("Location: final.php");
            die;
        }
    ?>
</body>
</html>
