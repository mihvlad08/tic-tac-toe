
// Some logic for tic-tac-toe game should be written in js.
let player1 = document.querySelector('#player_1');
let player2 = document.querySelector('#player_2');

document.querySelector(".button-trigger").addEventListener("click", function(){
    if(player1.value.length == 0 || player2.value.length == 0) {
        alert("Please enter some valid player names!");
    } 
 });
