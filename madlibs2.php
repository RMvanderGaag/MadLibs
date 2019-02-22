<?php include"error2.php" ?>


<html>
<head>
	<meta charset="UTF-8">
	<title>MadLibs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<div class="mx-auto bg-light mt-5" style="width:50%;">	
		<header><p class="h1">Mad Libs</p></header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
			<ul class="nav navbar-nav">
				<li ><a class="navbar-brand" href="madlibs.php">Er heerst paniek...</a></li>
				<li><a class="navbar-brand" href="madlibs2.php">Onkunde</a></li>
			</ul>
		</nav>
		<?php 
		if($verification == false){ 
			include"form2.1.php";
		}else{ 
			include"form2.2.php";
		} 
		?>
		<footer class="page-footer mt-5">
			<div class="text-center py-3 bg-secondary">
				<p>&copy; Rogier van der Gaag | 2019</p>
			</div>
		</footer>
	</div>
</body>
</html>