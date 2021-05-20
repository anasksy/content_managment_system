<?php
// Funktion wird in upload.php aufgerufen
function imageUpload() {
/**
* $path_folder ist eine Variable,
* wo unser Upload-Verzeichnis bzw. Ordner gespeichert ist. 
*/
$pathFolder = 'uploads/';

/**
* $tmp_name ist eine Variable,
* wo unser tmp_name von _FILES abgerufen wird
*/
$tmpName = $_FILES["datei"]["tmp_name"];

/**
* $name ist eine Variable,
* wo der Ursprungsname von der hochgeladenen Datei abgerufen wird
*/
$name = basename($_FILES["datei"]["name"]); 

/**
* $parts ist eine Variable,
* wo bild.png in zwei Variablen "bild" und "png" in einem Array geteilt werden.  
*/   
$parts = explode(".",$name);

/**
* $extension ist eine Variable,
* wo der zweite letzte Teil des Arrays (png) der Variable zugewiesen wird.
*/
$extension = strtolower(end($parts));

/**
*$allowed_extensions ist eine Variable,
* wo alle Endungen gefasst werden, die das hochgeladene Bild haben darf
*/
$imageExtension = "*{jpg,png,gif,jfif}";

/**
* $image_count ist eine Variable mit dem Startwert 0, 
* die später einen neuen Wert erhält, der abhängig ist von den Bildern,
* die sich im $path_folder befinden 
*/
$imageCount = 0; 

/**
* $images ist eine Variable, die im Ordner $path_folder nach Dateien sucht, die die Endungen von $allowed_extensions besitzt.
*/
$images = glob($pathFolder . $imageExtension, GLOB_BRACE);


/**
 * Sortiert die Dateien unabhängig von der Ordnung der Endungen in $allowed_extensions.-
 */
sort($images);




// Hiermit zählen wir, wie viele Bilder sich in $path_folder befinden
if ($images) {

			$imageCount = count($images); 
		} 

/**
 * Prefix für die Dateien, die auf dem Server hochgeladen werden -> redcms_file01, 02, 03 
 */
$prefix = "redcms_file";

/*
* Namensgebung der hochgeladenen Bilder
*/

	$fileImagePattern =  $prefix . $imageCount  . "." . $extension; 


/*
* $imageTargetName sorgt dafür, dass die Bilder in $pathFolder gespeichert werden
*/ 
$imageTargetName = "$pathFolder/$fileImagePattern";

// Bild wird hochgeladen und in $pathFolder verschoben
if (move_uploaded_file($tmpName, $imageTargetName)){
	header("Location: index.php");
} else {
	echo("Ein Fehler ist aufgetreten! Wähle eine Datei aus, bevor du hochladen möchstest!");
}
}
?>

