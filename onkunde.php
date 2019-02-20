<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>Mad libs</header>
	<div class="page">	
		<nav>
			<ul>
				<li><a href="madlibs.php">Er heerst paniek...</a></li>
				<li><a href="madlibs2.php">Onkunde</a></li>
			</ul>
		</nav>
		<div class="inputForm">
			<h1>Onkunde</h1>
			<p>Er zijn veel mensen die niet kunnen <?= $_POST ['vraag1']?>. Neem nou <?= $_POST ['vraag2']?>.</p>
			<p>Zelfs met de hulp van een <?= $_POST ['vraag4']?> of zelfs <?= $_POST ['vraag3']?> kan <?= $_POST ['vraag2']?> niet <?= $_POST ['vraag1']?>.</p> 
			<p>Dat heeft niet te maken met een gebrek aan <?= $_POST ['vraag5']?>, maar met te veel aan <?= $_POST ['vraag6']?>.</p> 
			<p>Te veel <?= $_POST ['vraag6']?> leidt tot <?= $_POST ['vraag7']?> en dat is niet goed als je wilt <?= $_POST ['vraag1']?>. Helaas voor <?= $_POST ['vraag2']?>. </p>
		</div>
		<footer>
			<p>Deze website is gemaakt door Rogier van der Gaag</p>
		</footer>
	</div>
</body>
</html>