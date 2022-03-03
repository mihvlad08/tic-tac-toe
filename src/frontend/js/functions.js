// Putting all squares in the 3x3 structure in a JavaScript variable, to manipulate it later.
let box1 = document.getElementById('1.1')
let box2 = document.getElementById('1.2')
let box3 = document.getElementById('1.3')
let box4 = document.getElementById('2.1')
let box5 = document.getElementById('2.2')
let box6 = document.getElementById('2.3')
let box7 = document.getElementById('3.1')
let box8 = document.getElementById('3.2')
let box9 = document.getElementById('3.3')
let timesEventFired = 0;

// Color array to determine how will the next square be colored after a movement.
let colors = ["Orange", "Magenta", "Orange", "Magenta", "Orange", "Magenta", "Orange", "Magenta", "Orange"];
let i = -1;


// A function to determine if victory has been achieved after every movement of a player (and checking all victory cases). 
const isWon = () => {
    let victoryCases = [
        // Row 1 check
        box1.style.background.includes('orange') && box2.style.background.includes('orange') && box3.style.background.includes('orange'),
        box1.style.background.includes('magenta') && box2.style.background.includes('magenta') && box3.style.background.includes('magenta'),
        // Row 2 check   
        box4.style.background.includes('orange') && box5.style.background.includes('orange') && box6.style.background.includes('orange'),
        box4.style.background.includes('magenta') && box5.style.background.includes('magenta') && box6.style.background.includes('magenta'),
        // Row 3 check
        box7.style.background.includes('orange') && box8.style.background.includes('orange') && box9.style.background.includes('orange'),
        box7.style.background.includes('magenta') && box8.style.background.includes('magenta') && box9.style.background.includes('magenta'),
        // Column 1 check
        box1.style.background.includes('orange') && box4.style.background.includes('orange') && box7.style.background.includes('orange'),
        box1.style.background.includes('magenta') && box4.style.background.includes('magenta') && box7.style.background.includes('magenta'),
        // Column 2 check
        box2.style.background.includes('orange') && box5.style.background.includes('orange') && box8.style.background.includes('orange'),
        box2.style.background.includes('magenta') && box5.style.background.includes('magenta') && box8.style.background.includes('magenta'),
        // Column 3 check
        box3.style.background.includes('orange') && box6.style.background.includes('orange') && box9.style.background.includes('orange'),
        box3.style.background.includes('magenta') && box6.style.background.includes('magenta') && box9.style.background.includes('magenta'),
        // Diagonal 1 check
        box1.style.background.includes('orange') && box5.style.background.includes('orange') && box9.style.background.includes('orange'),
        box1.style.background.includes('magenta') && box5.style.background.includes('magenta') && box9.style.background.includes('magenta'),
        // Diagonal 2 check
        box7.style.background.includes('orange') && box5.style.background.includes('orange') && box3.style.background.includes('orange'),
        box7.style.background.includes('magenta') && box5.style.background.includes('magenta') && box3.style.background.includes('magenta'),
    ]

    // Someone won 
    if (victoryCases.includes(true)) {
        console.log(`${playerColor} wins the game!`)
        document.getElementById('game_winner').innerHTML = "Game over. " + `${playerColor} wins!`;
        return true;
    }
    // Nobody won, all squared colored a.k.a tie
    else if (timesEventFired == 9) {
        console.log("It's a tie!")
        document.getElementById('game_winner').innerHTML = "Game over. Tie!";
    }
    // Nobody won, but not all squares are colored a.k.a game not over
    else {
        console.log("Next player, make your move")
        return false;
    }
}
// Self-explanatory, it changes the color, and if victory is achieved, blocks all further movements.
function changeColor() {
    i += 1;
    timesEventFired += 1;
    playerColor = colors[i]
    this.style.background = playerColor;
    this.style.cursor = 'not-allowed';
    document.cookie = `var3 = ${playerColor}`;
    console.log("The new color is " + playerColor)
    this.removeEventListener('click', changeColor); /* This blocks changing the color of an already colored square  */
    if (isWon()) {
        i = 1000
    };
    document.cookie = `tie = ${document.getElementById('game_winner').innerHTML}`;
}
box1.addEventListener('click', changeColor)
box2.addEventListener('click', changeColor)
box3.addEventListener('click', changeColor)
box4.addEventListener('click', changeColor)
box5.addEventListener('click', changeColor)
box6.addEventListener('click', changeColor)
box7.addEventListener('click', changeColor)
box8.addEventListener('click', changeColor)
box9.addEventListener('click', changeColor)