
# Tic-Tac-Toe Game Project

A simple, fullstack (JavaScript + PHP + mySQL) game
for the Freshbyte Internship



## Documentation

Upon entering the application, at 
https://localhost/tic-tac-toe/src/frontend/index.php, the user
must fill a form with 2 player names and click on the play
button. Failure to fill both input fields will result in an error.

If the user has completed both input fields, the game will
redirect to the next page (https://localhost/tic-tac-toe/src/frontend/gameplay.php),
where a 3x3 blank square will appear and the game begins.

Each player can color one square at a time (with either Orange or Magenta,
depending on who is the first player), given that the square is blank
or hasn't been clicked by any player yet.

In order for the game to be over, one of 3 cases must be true:

    1. Player 1 won
    2. Player 2 won
    3. Tie

Once the game is over, the user must click Finish, and the
game will redirect to the end page, displaying the result of the game.

On the server-side, PHP collects data and sends it to
the database, to store it for future reference.

### How is the data collected?

Several ways, actually. When the user completed Player1 and Player2
fields on the index page, PHP stored the data in a session ($_SESSION)
variable, which is being sent to the database in the following page.

How does the game know who won the game? Each time a square
was being clicked, a cookie was being updated to match the current color
of the player. When the game is over, the updated cookie is stored in a PHP
variable ($_COOKIE) to determine who won the game.

But what if it's a tie? For this, I created another cookie with JavaScript,
this time to get the innerHTML value of a paragraph that changes on victory/tie.
If the value of the paragraph equals ```"Game over. Tie!"```, the PHP if statement
(with the stored cookie as a condition) fires, letting the player and the
database know that it's a tie. The program first checks this possibility,
then moves on to the ```else ``` statements.

### How does the app know when a player forms a line and wins the game?

Each time a player clicks a square, a function ```isWon() ```fires
and checks if any of the possible victory cases was completed.
There are 8 possible cases, 3 vertical lines, 3 horizontal lines and 2 diagonal lines.
Multiply that by 2 (two colors/players), and we have 16 cases to check on each square clicked.