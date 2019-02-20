<html>
<head>
	<meta charset="UTF-8">
	<title>verhaal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>Mad libs</header>
	<div class="page">
		<nav>
			<ul>
				<li><a href="madlibs.php">Er heerst paniek...</a></li>
				<li><a href="">Onkunde</a></li>
			</ul>
		</nav>
		<div class="inputForm">
			<h1 id="titel">Er heerst paniek...</h1> 
			<p>Er heerst paniek in het Koningkrijk <?= $_POST ['vraag3']?>.</p>
			<p>Koning <?= $_POST ['vraag6']?> is ten einde raad, en als koning <?= $_POST ['vraag6']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST ['vraag2']?></p>	
			<p><?= $_POST ['vraag2']?>! Het is een ramp! Het is een schande!</p>
			<p>Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?</p>
			<p>Mijn <?= $_POST ['vraag1']?> is verdwenen! Zomaar, zonder waarschuwing. En ik had net <?= $_POST ['vraag5']?> voor hem gekocht!</p>
			<p>Majesteit, uw <?= $_POST ['vraag1']?> komt vast vanzelf weer terug?</p>
			<p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST ['vraag8']?> leren?</p>
			<p>Maar Sire, daar kunt toch uw <?= $_POST ['vraag7']?> voor gebruiken.</p>
			<p><?= $_POST ['vraag2']?>, Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.</p>
			<p><?= $_POST ['vraag4']?>, Sire.</p>
		</div>

		<footer>
			<p>Deze website is gemaakt door Rogier van der Gaag</p>
		</footer>
	</div>
		

</body>
</html>