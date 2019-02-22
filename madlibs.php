<?php  include"error.php" ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>MadLibs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="page">
		<header><p class="title">Mad Libs</p></header>
		<nav>
			<ul>
				<li><a href="madlibs.php">Er heerst paniek...</a></li>
				<li><a href="madlibs2.php">Onkunde</a></li>
			</ul>
		</nav>
		<?php 
		if($verification == false){ 
			include"form1.php";
		}else{ 
			include"form2.php";
		} 
		?>
		
		<footer>
			<p>&copy; Rogier van der Gaag | 2019</p>
		</footer>
	</div>
</body>
</html>