var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    
setTimeout(showSlides, 5000); // Change image every 5 seconds
}







/*
window.onload = function(argument) {

	// var lyric = "i couldn't take it couldn't stand another minute couldn't bear another day without you in it";
	var lyric = "Winnie is a cat. He LOVED playing fetch. The only problem was that he had neither an owner or a single friend. He had longed for one since he was a kitten. But no one wanted to play with him and he had no idea why! So he went to the playground to ask other Once apon a time, a duck wanted to buy an apple. The fruit store sign said,Once upon a time, there was a little girl. She lived in a kingdom ruled by Queen Milly. This kingdom was named as Monoly. She was living happily with her grandparents in Monoly. She loved her grandparents a lot. Her name was Sarah. She had a friend named Lucy. They loved to play together. They “One apple for a dollar!”. He did not know much about dollars, so he went to his neighbor and asked, “How much is one dollar?”  The neighbor said, “One dollar is one buck.” The duck thought, “A buck would Wild fire was speeding towards her sister, leaping over a bucket of freshly cut flowers.  The sounds of mice protesting and grumbling loudly after she pushed them out of her way barely meant anything to the mouse.  She ran around a corner, and rushed towards the cloud elevator, which worked quite like a waterwheel, Oh no. Oh no, no no! There’s only once chance. I need to find out where she is, that’s all I need. Even just a little Monster in the Jungle Once upon a time a wise lion lived in the jungle.  He was always respected for his intelligence and kindness.  All the animals used to go to him to discuss their problems.  He was the best king they could ever had. a few miles away from the jungle there was an clue. ‘Lavender!’ Wildfire screamed, her eyes widening in fear. No answer Did I really just lose her?  ‘Hold my paw,If I were a princess I would ride a unicorn. It would be called Glisten and she would be my best friend forever. We would go and explore tropical islands together every month. We would eat rainbow coloured ice cream with pink and violet sprinkles. The thing with unicorns is, they’re very precious and you Fire told her sibling. ‘Okie dokie!’  Lavender said, slipping her paw into Wildfire’s.  ‘Stay beside me, and don’t let go of my paw, because the streets are always crowded on Mondays.’  Wildfire cast a worried look at her sister, who was now skipping al- ong with her, trying to keep Ma’am, the Groundrels are coming.” Said a stiff, grey mouse in shiny silver armor. “Prepare.One bright sunny day Molly went to Sophie’s house for a Sunday play date. “What are we going to play today?” Molly asked. ”How about football? It is the World Cup these days!” And with that they happily skipped to the back yard. They were having a lovely time until the ball hit the magic The Once upon a time, there lived a girl named Sally. She wanted a small gift from Santa this year. She wanted that her mother to be happy always. It was Christmas Eve. Santa was coming tonight. When she was sleeping she planned that this year she would see Santa for sure. When Santa will pi Troops.” Said a gentle voice. “But we never use them!” He wheezed. “I know, General Wislley, but just this once, we have to.” Wislley growled, mumbling to himself, “The Troops.. Who knows what’s next!” He doubtfully What will I do?          Where";
  
	var words = {};
	var words_attr = [];
	string_handle(lyric);

	var canvas = document.getElementById('c');
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;

	if (canvas.getContext) {
		var c = canvas.getContext('2d'),
			w = canvas.width,
			h = canvas.height;

		c.strokeStyle = 'red';
		c.fillStyle = 'white';
		c.lineWidth = 5;

		// constructor
		Word = function(key) {
			this.text = key;
			this.x = Math.random() * w;
			this.y = Math.random() * h;
			this.font = words[key] * 10 + 'px arial'
			this.speed = (words[key]);
		}
		for (key in words) {
			words_attr.push(new Word(key));
		}
		console.log(words_attr.length);

		function animation() {
			for (var i = 0; i < words_attr.length; i++) {
				c.font = words_attr[i].font;
				c.fillText(words_attr[i].text, words_attr[i].x, words_attr[i].y);
				words_attr[i].width = c.measureText(words_attr[i].text).width;
				c.stroke();
			}
			move();
		}

		function move() {
			for (var i = 0; i < words_attr.length; i++) {
				if (words_attr[i].x > w) {
					words_attr[i].x = -words_attr[i].width;
					words_attr[i].y = Math.random()*h;
				}else{
					words_attr[i].x += words_attr[i].speed;
				}
			}
		}

		setInterval(function() {
			c.clearRect(0,0,w,h);
			animation();
		},24);

	}

	function string_handle(str) {
		var split_str = str.split(" ");
		var word_array = [];
		var word_count = [];
		for (var i = 0; i < split_str.length; i++) {
			check = true;
			for (var j = 0; j <= word_array.length; j++) {
				if (split_str[i] == word_array[j]) {
					word_count[j]++;
					check = false;
					break;
				}
			}
			if (check) {
				word_array.push(split_str[i]);
				word_count.push(1);
			}
		}
		for (var i = 0; i < word_array.length; i++) {
			words[word_array[i]] = word_count[i];
		}
		return words;
	}

}

*/



/*

$(document).ready(function() {
  $(".Bumpycart").lettering();
});

*/
