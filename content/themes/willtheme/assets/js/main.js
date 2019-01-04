
function randomNum() {
    return Math.floor(Math.random() * tagline.length - 1) + 1
}

var tagline = ["and I'm a web dev", 'and I make cool stuff', "and I'm always learning new things", "and I'm a web dev"];
var i = -20;
var txt = 'Lorem ipsum typing effect!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */
var randomTag = randomNum();

function typeWriter() {
  if (i < tagline[randomTag].length) {
    document.getElementById("hero-tag").innerHTML += tagline[randomTag].charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
  else{
    document.getElementById("hero-fade").classList.add("show")
  }
}
typeWriter();
