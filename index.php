<!DOCTYPE html>
<!-- Spaghetti code by UnbendableStraw, poncethecat and fearnlj01. some code was used from html5 up, css3 please!, and ihatetomatoes -->
<!-- Someone mention Fearn so I can find out if people ever read the commit logs -->
<html>
	<head>
		<title>Track 44</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- [if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif] -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!-- [if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif] -->
	</head>

	<style>
		body:not(.loaded) {
			background-color: #2E413F;
		}

		body:not(.loaded) > *:not(#loader-wrapper) {
			display: none !important;
		}
	</style>

	<body class="is-loading">
		<!-- Demi please fix this damn Navbar for mobile smh -->
		<div class="bar" id="navbar">
			<div class="insidebar">
				<a href="#banner" class="button style4 scrolly-middle">Connect</a>
				<a href="#community" class="button style4 scrolly-middle">Community</a>
				<a href="#first" class="button style4 scrolly-middle">Game Servers</a>
				<a href="#contributors" class="button style4 scrolly-middle">Contributors</a>
				<a href="#t44hq" class="button style4 scrolly-middle">T44 HQ</a>
				 || 
				<a href="/about/" class="button style4">About Us</a>
				<a href="/mail/" class="button style4">Mail</a>
				<a href="/colors/" class="button style4">Colors</a>
				<a href="https://wiki.track44.moe" class="button style4">FAQ/Wiki</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</div>
		<script>
			function myFunction() {
    		var x = document.getElementById("navbar");
    		if (x.className === "bar") {
        	x.className += " responsive";
    		} else {
        	x.className = "bar";
    		}
			}
		</script>

		<!-- Header -->

		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>

		<div id="content">
			<section id="header">
				<header>
					<h1>Welcome</h1>
					<p>To Track 44</p>
				</header>
				<footer style="bottom: 6em;">
					<a href="#banner" class="button style2 scrolly-middle">Connect to the Wired</a>
				</footer>
			</section>
		</div>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Connected!</h2>
				</header>
				<p class="white">Track 44 is the beginning of an open community for everyone.<br />
				We organize group gaming, giveaways, karaoke, streams, and just chill together.<br />
				Here, you will find info on how to connect with us!</a></p>

			</section>

		<!-- Community -->
			<article id="community" class="container box style1 left">
				<a href="#" class="image fit"><img src="images/pic01.gif" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Join the Track 44 Community!</h2>
						</header>
					<p>Discord Server - <a href="http://discord.gg/track44">Copy or Click Me!</a></p>
					<p>Steam Group - <a href="http://steamcommunity.com/groups/track44">Admin's World</a></p>
					<p>Board44 - <a href="http://board44.org">Click here</a></p>
					<p><a href="/about/">About the Track 44 Team</a></p>



				</div>

			</article>


		<!-- List Game Servers -->
			<article id="first" class="container box style1 right">
				<a href="https://www.youtube.com/watch?v=96Mbt36ayZ8" class="image fit" target="blank"><img src="images/pic02.gif"></a>
				<div class="inner">
					<header>
					</header>
					<h2>Play Some Games With Us!</h2>
					<br style="margin: 0.5em;">
					<p>Team Fortress 2 - tf2.track44.moe
					<p>Minecraft - <a href="http://mc.track44.moe">mc.track44.moe</a></p>
					<p>Garry's Mod - gmod.track44.moe
					<br style="margin:0.1em;"> OR <br style="margin:0.1em;">Search Track 44 under Sandbox gamemode!</p>
				</div>
			</article>

		<!-- Coming Soon -->


			<article class="container box style2">
				<header>
					<h2>Coming Soon!</h2>
					<p>Arma III</p>
					<p>CS:GO</p>
					<p>CS1.6</p>
					<a href="videos/notfunnytbh.mp4" target="blank">
						<div style="padding: 10px 10px;">
						</div>
					</a>
				</header>
			</article>


		<!-- Portfolio -->
	<!--I'm commenting this out until our "friends" chill out		<article class="container box style2">
				<header>
					<h2>Who am I?</h2>
					<p></p>
					<p>I'm a mixed bag of computer and law enforcement/military skills. Former military policeman, and current Software QA Engineering Lead living on the best coast West coast in Seattle (err, actually Redmond,) Washington!</p>
		    </header> -->

		<!-- Portfolio	-->
		<!--VIP Contributors -->

			<article class="container box style2">
				<header>
					<h2>VIP Contributors</h2>
					<p>Lohs, Logs, Lohs, Carlos, Lohhhhhs</p>
					<p>Skandha! <a href="https://twitter.com/JustSkandha">https://twitter.com/JustSkandha</a></p>
				</header>
			</article>


		<!-- Contributors -->
			<article id="contributors" class="container box style2">
				<header>
					<table  style="margin-bottom: 0;">
						<tbody>
							<tr width="3">
								<th style="padding-bottom: 5px;" colspan="3"><h2>Contributors</h2></th>
							</tr>
							<tr>
								<td>Mith</td>
								<td>Rem</td>
								<td>Hein</td>
							</tr>
							<tr>
								<td>Trev</td>
								<td>Days</td>
								<td>Lumi</td>
							</tr>
							<tr>
								<td>Angel</td>
								<td>Ghim</td>
								<td>Noxy</td>
							</tr>
							<tr>
								<td>Celly</td>
								<td>Miako</td>
								<td>eMiko</td>
							</tr>
							<tr>
								<td>Laser</td>
								<td>Brando</td>
								<td>Austin</td>
							</tr>
							<tr>
								<td>Sleep</td>
								<td>Spacey</td>
								<td>Booven</td>
							</tr>
							<tr>
								<td>Deftsu</td>
								<td>Tipper</td>
								<td>raeyan</td>
							</tr>
							<tr>
								<td>Brander</td>
								<td>Kneesox</td>
								<td>DIZIACE</td>
							</tr>
							<tr>
								<td>D Money</td>
								<td>Sir Caet</td>
								<td>Satoshi</td>
							</tr>
							<tr>
								<td>Demiture</td>
								<td>TSMALL96</td>
								<td>Goshujin</td>
							</tr>
							<tr>
								<td>fearnlj01</td>
								<td>Korea Boi</td>
								<td>HamleHDK</td>
							</tr>
							<tr>
								<td>TDRailgun</td>
								<td>PeachRift</td>
								<td>poncethecat</td>
							</tr>
							<tr>
								<td>Kyle Scarce</td>
								<td>Camo Yoshi</td>
								<td>Embarrassing</td>
							</tr>
							<tr>
								<td>TheRyDesigns</td>
								<td>TheEliteKing</td>
								<td>MyNameIsArando</td>
							</tr>
							<tr>
								<td>Tecno Jellyfish</td>
								<td>Based Sadlord Sokage</td>
								<td />
							</tr>
						</tbody>
					</table>
				</header>
			</article>
		<!-- Portfolio	-->

		<article id="t44hq" class="container box style2" style="margin-top: 8.5em;">
			<header>
				<h2>Track 44 HQ (2015)</h2>
			</header>
			<div class="inner gallery">
				<div class="row 0%">
					<div class="3u"><a href="images/portfolio/1.jpg" class="image fit"><img src="images/portfolio/1.jpg" alt="" title="Full Shot" /></a></div>
					<div class="3u"><a href="images/portfolio/2.jpg" class="image fit"><img src="images/portfolio/2.jpg" alt="" title="Full Shot" /></a></div>
					<div class="3u"><a href="images/portfolio/3.jpg" class="image fit"><img src="images/portfolio/3.jpg" alt="" title="Desktop" /></a></div>
					<div class="3u"><a href="images/portfolio/4.jpg" class="image fit"><img src="images/portfolio/4.jpg" alt="" title="290X Crossfire" /></a></div>
				</div>
				<div class="row 0%">
					<div class="3u"><a href="images/portfolio/5.jpg" class="image fit"><img src="images/portfolio/5.jpg" alt="" title="The Desk" /></a></div>
					<div class="3u"><a href="images/portfolio/8.jpg" class="image fit"><img src="images/portfolio/8.jpg" alt="" title="." /></a></div>
					<div class="3u"><a href="images/portfolio/9.jpg" class="image fit"><img src="images/portfolio/9.jpg" alt="" title="Vintage Corner" /></a></div>
					<div class="3u"><a href="images/portfolio/12.jpg" class="image fit"><img src="images/portfolio/12.jpg" alt="" title="Some comics" /></a></div>
				</div>
			</div>
		</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<p><a href="http://imgur.com/a/jXbf0">See More Here (in HD!)</a></p>
				</header>
			</article>


		<!-- Portfolio -->
		<article class="container box style2">
			<header>
				<h2>Who am I?</h2>
				<p></p>
				<p>I'm UnbendableStraw (or "admin") and I help manage the community and keep everything running!</p>
			</header>

		<!-- Social Links -->
		<article class="container box style2" style="margin-top: 9em;">
			<header>
				Find Me Online or Donate Below!
			</header>

			<section id="footer">
				<ul class="icons">
					<li><a href="https://www.twitter.com/unbendablestraw" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://steamcommunity.com/id/unbendablestraw" class="icon fa-steam"><span class="label">Steam</span></a></li>
					<li><a href="https://www.vine.co/adwinistrator" class="icon fa-vine"><span class="label">Vine</span></a></li>
					<li><a href="https://youtube.track44.moe" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
					<li><a href="https://www.twitch.tv/unbendablestraw" class="icon fa-twitch"><span class="label">Twitch</span></a></li>
					<li><a href="https://github.com/track44" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="https://www.patreon.com/track44" class="icon fa-dollar"><span class="label">Dollar</span></a></li>
				</ul>
			<ul class="menu">
			</ul>
			<!-- Why was there a close div tag here ¯\_(ツ)_/¯ -->
			<iframe src="https://discordapp.com/widget?id=188556676121624577&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		</section>

		<p>
			<a title="hit counter">
			Vistor Count: <?php include "/var/www/count.php"; ?>
			</a>
		</p>
		<p>
			<center>
					<img src="https://i.imgur.com/nPxjS4J.gif" />
					<p style="font-family:courier; font-size:60%;">Cursed Image &copy; Maria 2017</p>
				</center>
		</p>
		<p>
			<audio id="music" controls>
			<source src="Track 44.mp3" type="audio/mpeg">
			</audio>
		</p>
	</body>
</html>
