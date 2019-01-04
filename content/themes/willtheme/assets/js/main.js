
function sleep(ms) {
   return new Promise(function(resolve) {
       setTimeout(resolve, ms)
   });
}

var tagline = ['this is a tagline', 'and another', 'test test', 'last one'];
var output = document.getElementById('hero-tag');


async function test(){
	//loops through each tag in tagline
	for(var counter in tagline){
  	//sets a tagline to a var from the 'tagline' array
  	var tag = tagline[counter];
    await sleep(100);

    //loops through each character and appends to the output
    for (pos = 0; pos < tag.length; pos++){
      output.innerHTML += tag[pos];
      await sleep(50);
    }

    //waits before removing chars
    await sleep(1000);

    //loops through each character and removes last char from output
    for (bPos = output.innerHTML.length - 1; bPos >= 0; bPos--) {
      output.innerHTML = output.innerHTML.slice(0, bPos);
      await sleep (50); // wait for 50 ms
    }
  }
  test();
}

test();
