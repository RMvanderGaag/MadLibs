<?php  
	echo 

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>MadLibs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header><p class="title">Mad Lips</p></header>
	<div class="page">
		<nav>
			<ul>
				<li><a href="madlibs.php">Er heerst paniek...</a></li>
				<li><a href="madlibs2.php">Onkunde</a></li>
			</ul>
		</nav>
			<div class="inputForm">
				<form action="verhaal.php" method="post">
					<br><p>Welk dier zou jij nooit als huisdier willen hebben?</p><input type="text" name="vraag1"> <span><?php echo $error ?></span> <br>
					<p>Wie is de belangrijkste persoon in je leven?</p><input type="text" name="vraag2"> <br>
					<p>In welk land zou je graag willen wonen?</p><input type="text" name="vraag3"> <br>
					<p>Wat doe je als je je verveeld?</p><input type="text" name="vraag4"> <br>
					<p>Met welk speelgoed speelde je als kind het meest?</p><input type="text" name="vraag5"> <br>
					<p>Bij welke docent spijbel je het liefst</p><input type="text" name="vraag6"> <br>
					<p>Als je 100.000,- euro had, wat zou je dan kopen?</p><input type="text" name="vraag7"> <br>
					<p>Wat is je favorite bezigheid?</p><input type="text" name="vraag8"> <br>
					<div class="submit"><input type="submit" id="submit"></div>
				</form>
			</div>
		<footer>
			<p>Deze website is gemaakt door Rogier van der Gaag</p>
		</footer>
	</div>
</body>
</html>