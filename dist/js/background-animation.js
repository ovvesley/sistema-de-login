var squares = document.querySelectorAll('.row');
console.log(squares)
for (var i = 0; i < squares.length; i++) {
  var square = squares[i];
  
  // Random number between 0.5 and 1.5
  var duration = (Math.random() + 0.5) + 's';
  
  // Set duration to random
  square.style.animationDuration = duration;
  square.style.webkitAnimationDuration = duration;
  
  // Also offset animation (prevents initial weirdness)
  square.style.webkitAnimationDelay = duration;
}