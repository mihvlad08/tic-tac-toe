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

// Color array to determine how will the next square be colored after a movement.
let colors = ["magenta", "blue", "magenta", "blue", "magenta", "blue", "magenta", "blue", "magenta"];
let i = -1;

// A function to determine if victory has been achieved after every movement of a player. Need to work on 'tie'
const isWon = () => {
    if(box1.style.background.includes('magenta') && box2.style.background.includes('magenta') && box3.style.background.includes('magenta')) {
        console.log("You win! Cannot make any more moves")
        return true;
    } else {
        console.log("Next player, make your move")
        return false;
    }
    // Need to work on victory cases, not to include too many if's
}

// Self-explanatory, it changes the color, and if victory is achieved, blocks all further movements.
function changeColor() {
    i+=1;
    playerColorr = colors[i]
    this.style.background=playerColorr;
    this.style.cursor = 'not-allowed';
    if(isWon()) {i = 1000};
    // Add a function to block further color changes if a color has been applied
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