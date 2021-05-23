<?php
include_once("filedata.php");
include('helper.php');

/**
*
* @return void
**/

function imageUpload($fileData) {
	$imageCounter = 0; 
	$images = getCmsImages($fileData);
	sort($images);

	if ($images) {
		$imageCounter = count($images); 
	} 

	$fileImagePattern =  $fileData["prefix"] . $imageCounter  . "." . getUploadedFilesExtension(); 
	$imageTargetName = $fileData["imageUploadPath"] . "/$fileImagePattern";

	if (move_uploaded_file($_FILES["datei"]["tmp_name"], $imageTargetName)) {
		
		// create a text file for current uploaded image
		createImagetext($fileData, $imageCounter);
		
		// redirect to index page after successful upload
		header("Location: index.php");
	} else {

		// show error message on upload fail
		echo("Ein Fehler ist aufgetreten! Wähle eine Datei aus, bevor du hochladen möchstest!");
	}
}


/**
*
* @return void
**/
function createImagetext($fileData, $imageCounter) {
	$inputText = $_POST["textFeld"];
	$files = getCmsImageTexts($fileData);

	$fileTextPattern = $fileData["textUploadPath"].$fileData["prefix"] . $imageCounter . ".txt"; 
	$createText = fopen($fileTextPattern, "w") and fwrite($createText, $inputText);

	if(isset($_POST["submit"])) {
    	$createText;
	}
}
// entry point
imageUpload($fileData);
?>


