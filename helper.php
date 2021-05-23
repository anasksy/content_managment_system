<?php
/**
* get a list of uploaded images
*
* @return array
*/
function getCmsImages($fileData){
	return glob($fileData["imageUploadPath"] . $fileData["imageExtension"] , GLOB_BRACE);
}

/**
* get a list of text files
*
* @return array
**/
function getCmsImageTexts($fileData){
	return glob($fileData["textUpload"] . $fileData["textExtension"], GLOB_BRACE);
}

/**
*
*@return String
*/
function getUploadedFilesExtension(){
	$name = basename($_FILES["datei"]["name"]);
	$parts = explode(".", $name);
	return strtolower(end($parts));
}
?>