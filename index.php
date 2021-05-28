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
			<div id="pageHeadline">
				<h1> Images: </h1>	
			</div>
			<?php
			include("filedata.php");
			include("helper.php");
			$images = getCmsImages($fileData);
			sort($images);
		
			foreach($images as $image){
				$fileNamePartsArray = explode(".", $image);
				echo("<table> <tr>");
				echo('<td> <img id="uploadedImages" src="'.$image.'" > </td>');
				echo("<td><h4>");
				echo("<div id='imageContent'>");
				echo(file_get_contents($fileNamePartsArray[0] . ".txt"));
				echo("</h4> </td> </div>");
				echo("</tr> </table>");
			}
			?>
		</main>
	</body>
</html>





