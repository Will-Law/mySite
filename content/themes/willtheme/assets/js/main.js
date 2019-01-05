
function randomNum() {
    return Math.floor(Math.random() * tagline.length - 1) + 1
}

var tagline = ["and I'm a web dev", 'and I make cool stuff', "and I'm always learning new things", "and I'm a web dev"];
var i = -20;
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


//Scroll hero blur

var heroContent = document.getElementById("hero-content");
document.addEventListener('scroll', function(){
  if (document.documentElement.scrollTop > 50){
    heroContent.classList.add('scroll') }
  else{
    heroContent.classList.remove('scroll') }
})

//Scroll header

var heroHeight = document.getElementById("hero").offsetHeight;
var header = document.getElementById("header");
var pageContainer = document.getElementById("header");

document.addEventListener('scroll', function(){
  if (document.documentElement.scrollTop > heroHeight){
    header.classList.add('head-scroll')
    //pageContainer.style.transform = 'translateY(0px)'
    }
  else{
    header.classList.remove('head-scroll')
    //pageContainer.style.transform = 'translateY('+heroHeight+'px)'
  }
})
