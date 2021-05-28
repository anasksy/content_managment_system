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
*
*@return String
*/
function getUploadedFilesExtension(){
	$name = basename($_FILES["datei"]["name"]);
	$parts = explode(".", $name);
	return strtolower(end($parts));
}
?>