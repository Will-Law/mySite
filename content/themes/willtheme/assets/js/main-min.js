function randomNum(){return Math.floor(Math.random()*tagline.length-1)+1}function typeWriter(){i<tagline[randomTag].length?(document.getElementById("hero-tag").innerHTML+=tagline[randomTag].charAt(i),i++,setTimeout(typeWriter,speed)):document.getElementById("hero-fade").classList.add("show")}var tagline=["and I'm a web dev","and I make cool stuff","and I'm always learning new things","and I'm a web dev"],i=-20,speed=50,randomTag=randomNum();typeWriter();var heroContent=document.getElementById("hero-content");document.addEventListener("scroll",function(){50<document.documentElement.scrollTop?heroContent.classList.add("scroll"):heroContent.classList.remove("scroll")});var heroHeight=document.getElementById("hero").offsetHeight,header=document.getElementById("header"),pageContainer=document.getElementById("header");document.addEventListener("scroll",function(){document.documentElement.scrollTop>heroHeight?header.classList.add("head-scroll"):header.classList.remove("head-scroll")});