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
		createText($fileData, $imageCounter);
		
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
function createText($fileData, $imageCounter) {
	$inputText = $_POST["textFeld"];

	$fileTextPattern = $fileData["textUploadPath"].$fileData["prefix"] . $imageCounter . ".txt"; 
	$textCreate = fopen($fileTextPattern, "w") and fwrite($textCreate, $inputText);

	if(isset($_POST["submit"])) {
    	$tectCreate;
	}
}
// entry point
imageUpload($fileData);
?>


