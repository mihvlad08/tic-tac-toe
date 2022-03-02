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
    <?php
        include("../backend/connection.php");
        include("../backend/functions.php");
        
        


    ?>
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
        <input id="button-game" type="submit" value="Finish"><br><br>
    </main>
    <!-- Load js file at end -->
    <script src="./js/functions.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>