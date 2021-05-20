<!DOCTYPE html>
<html lang="de">
	<head>
		<link href ="styles/style_index.css" rel ="stylesheet" type ="text/css">
		<meta charset="UTF-8">
		<title> Index Page </title>
	</head>

	<body>
		<header>
			<img id="redseaLogo" alt="Logo RedSea" src="bilder/redsea_logo.png" height="100">
		</header>

		<main>
			<div id="imagesText">
				<center>
					<h1> Images: </h1>
				</center>
			</div>

			<div id ="uploadedFile">
			<?php
			// Test #2
			// Pfade der Texte und Bilder
			$pathFolder = "uploads/";
			$textPathFolder = "";
			// Erlaubte Dateiendungen
			$imageExtension = "*{jpg,png,gif,jfif}";
			$textExtension = "*{txt}";
			// Sucht nach Bild- und Textdateien
			$images = glob($pathFolder . $imageExtension, GLOB_BRACE);
			sort($images);
			$files = glob("" . $textExtension, GLOB_BRACE);


			// Startwert
			$counter = 0;
			// Zählt die Anzahl der Elemente (Anzahl der .txt files) des Arrays $files
			$filesLength = count($files);
				// Darstellung der Bilder und Texte auf der Index-Page
					while($counter < $filesLength) {
						$imageSource = $pathFolder . "redcms_file" . $counter . ".png>";
							echo("<img id='uploadedImages' src=$imageSource");
							echo("<center> <h4>");
							echo(file_get_contents("redcms_file" . $counter . ".txt"));
							echo("</h4> </center>");
						$counter++;
					}

			?>
			</div>
		</main>
	</body>
</html>
