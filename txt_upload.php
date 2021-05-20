<?php
// Funktion wird in upload.php aufgerufen
function textUpload() {

$textExtension = "*{txt}";
$textCount = 0;
$prefix = "redcms_file";
$files = glob("" . $textExtension, GLOB_BRACE);

if ($files) {
    $textCount = count($files); 
} else {
    $textCount = 0;
}

	$fileTextPattern =  $prefix . $textCount . ".txt"; 

$inputText = $_POST["textFeld"];
$createText = fopen($fileTextPattern, "w") and fwrite($createText, $inputText);

if(isset($_POST["submit"])) {
    $createText;
}

}
?>

