<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="live.css">
	<script> 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-2361329-3', 'auto');ga('send', 'pageview'); 
</script> 
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <img id="listen-live" class="radio-preview"/>
      <h4 id="radio-co-song-title" style="display: none;"><script src="https://embed.radio.co/embed/s87a2a134a/song.js"></script></h4>
    </div>
    <div class="col-sm-12">
      <div><script src="https://embed.radio.co/player/5fa4edf.js"></script></div>
    </div>
  </div>
</div>

<script type="text/javascript">
					setInterval(function(){
					  	var str = "";
					  	var songTitle = document.getElementById("radio-co-song-title").textContent;
					  	var splitSongTitle = songTitle.split("-");
					  	var checkSongTitle = str.concat(splitSongTitle[0]);
					  	console.log(checkSongTitle);
					  	//alert(checkSongTitle);
					  	if (checkSongTitle == "Gary Meade ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_Through_The_Years_290x180.jpg')";
					  	 	}
					  	 	
					  	 	// If the presenter is "Mark Hanratty ". this image will set ---- IF THERE IS NEW PRESENTER, ADD ANOTHER else if BLOCK
					  	 	
							else if (checkSongTitle == "Mark Hanratty ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_SONGWRITER_SPOTLIGHT_290x180-1.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "Babylon ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2021/01/Babylon-Player-Banner.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "Cecilia Ramos ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/cecilia_ramos_player_no_button.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "Thomas McCarthy ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_FREEDOM_AT_FIVE_290x180.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "Colm Slattery ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_FRUIT_SONIC_290x180.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Oisin Coyne "){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_ROAR_THE_SCORE_290x180.jpg')";
							}
					  	 	else if(checkSongTitle == "Ilse Mannessen "){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_MOON_HOUR_290x180.jpg')";
					  	 	}
					  	    else if((checkSongTitle == "Deuce " ) || (checkSongTitle == "Matt Barker ")){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/deuce.jpg')";
					  	 	}
					  	    else if(checkSongTitle == "Chloe Mc Donnell "){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_FEEL_GOOD_WEEKEND_290x180.jpg')";
					  	 	}
							else if(checkSongTitle == "Royce Laroca "){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_REAL_TALK_SHOW_290x180.jpg')";
					  	 	}
							else if(checkSongTitle == "Sophie Stapleton "){document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_HOUR_OF_EIRE_290x180.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Peter Coleman "){
					  	 	    document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_AFTER_EIGHT_SHOW_290x180-1.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Sukrity Sharma "){
					  	        document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_ROCK_NIGHTS_290x180.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Jerlin Gandhi "){
					  	        document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2021/01/player_MANTRA_290x180.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Jerline Gandhi "){
					  	        document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_REFLECTIONS_OF_A_BUBBLE_290x180.jpg')";
					  	 	}
					  	 	else if(checkSongTitle == "Jonathan Maby "){
					  	        document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/12/player_DJ_JON_MABY_290x180.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "Webinar ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2021/01/2021-01-05-1.jpg')";
					  	 	}
					  	 	else if (checkSongTitle == "DJ Iano ") {document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2021/01/player_ORGANIC_VIBES_290x180-1.png')";
					  	 	}
							 else{document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/11/Pure_Vibes_On_Air_presenters_player_home.jpg')";
							}
							/*else{document.getElementById("listen-live").style.backgroundImage = "url('https://babylonradio.com/wp-content/uploads/2020/07/sophia-mcdonald.png')";
					  	 	}*/
					  	 
					  	 }, 2000);
				</script>

<footer>
	<div class="footer-copyright text-center py-3">© 2020 - 
    <a href="https://babylonradio.com/" target="_blank">babylonradio.com</a>
  </div>
</footer>
</body>
</html>