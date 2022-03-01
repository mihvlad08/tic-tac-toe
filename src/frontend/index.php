<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>TicTacToe - Freshbyte Intern</title>
</head>
<body>
    <?php
        session_start();

        include("../backend/connection.php");
        include("../backend/functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $player_1 = $_POST['player_1'];
            $player_2 = $_POST['player_2'];
            if(!empty($player_1) && !empty($player_2)) {

                //So far, all this does is save the players' names into the database and takes the user to the gameplay page.
                //This could have been achived with an a.href for example, but this way we make sure that the player fields are completed

                $query = "INSERT INTO game (player1, player2, status) VALUES ('$player_1','$player_2','')";
                mysqli_query($con, $query);

                header("Location: gameplay.php");
                die;
            }
        }
        

    ?>
    <h1 class="intro">Wanna play?</h1>
    <form method="post" class="player-info">
        <div class="text-inputs">
            <input style="margin-right:5px" placeholder="Enter Player 1" id="player_1" class="text" type="text" name="player_1"><br><br>
            <input style="margin-left:5px" placeholder="Enter Player 2" id="player_2" class="text" type="text" name="player_2"><br><br>
        </div>
        <input id="button" class="button-trigger" type="submit" value="Play"><br><br>
    </form>


    <!-- Load js file at end -->
    <script src="./js/app.js"></script>
</body>
</html>