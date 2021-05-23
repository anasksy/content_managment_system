<!DOCTYPE html>
<html lang="de">
	<head>
		<link href ="styles/style_admin.css" rel ="stylesheet" type ="text/css">
		<meta charset="UTF-8">
		<title> RedSea Projects </title>
	</head>
	<body id ="pages">
		<header>
			<img id="redseaLogo" alt="Logo RedSea" src="bilder/redsea_logo.png" height="100">
		</header>
		<main>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div id ="buttonCentering">
					<center>
						<input id ="chooseFileButton" type="file" name="datei" id="datei">
						<label for ="chooseFileButton" class="chooseFileButtonClass"> Datei auswählen </label> <br>
						<textarea name="textFeld" id="textFeld" rows="4" cols="50" placeholder="Gebe eine Nachricht ein!"></textarea> <br>
						<input id ="submitButton" type="submit" value="➤ Hochladen" name="submit">
					</center>
				</div>
			</form>
		</main>
	</body>
</html>
