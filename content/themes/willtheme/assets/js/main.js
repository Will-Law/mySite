
function sleep(ms) {
   return new Promise(function(resolve) {
       setTimeout(resolve, ms)
   });
}

var tagline = ['this is a tagline', 'and another', 'test test', 'last one'];

var i = 0;
var txt = 'Lorem ipsum typing effect!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("hero-tag").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
