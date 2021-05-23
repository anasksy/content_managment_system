<!DOCTYPE html>
<html lang="de">
	<head>
		<link href ="styles/style_index.css" rel ="stylesheet" type ="text/css">
		<meta charset="UTF-8">
		<title> Index Page </title>
	</head>
	<body>
		<header>
			<a href="admin.php"> 
				<img id="redseaLogo" alt="Logo RedSea" src="bilder/redsea_logo.png" height="100">
			</a>
		</header>
		<main>
			<div id="imagesText">
				<center>
					<h1> Images: </h1>
				</center>
			</div>
			<?php
			include("filedata.php");
			include("helper.php");

			$images = getCmsImages($fileData);
			sort($images);
			
			foreach($images as $index => $image){
				$fileIndex = explode($fileData["prefix"] , explode(".", $image)[0])[1];
				echo('<img id="uploadedImages" src="'.$image.'" >');
				echo("<center> <h4>");
				echo(file_get_contents($fileData["imageUploadPath"] .$fileData["prefix"] . $fileIndex . ".txt"));
				echo("</h4> </center>");
			}
			?>
		</main>
	</body>
</html>

