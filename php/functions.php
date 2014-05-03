<?php


$add = $_GET['add'];
if($_GET['add']){
	addFilm($_GET['add']);
}

$remove = $_GET['remove'];
if($_GET['remove']){
	removeFilm($_GET['remove']);
}

$checked = $_GET['checked'];
if($_GET['checked']){
	isChecked($_GET['checked']);
}



function removeFilm ($n) {
	$url = "../bd/data.txt";
	$file = fopen($url, 'r');
	$text = fread($file, filesize($url));
	$id = '-' . $n . '-' ;
	$newtext = str_replace($id,'', $text);
	print json_encode($newtext);
	fclose($file);

	$file = fopen($url, 'w');
	fwrite($file, $newtext, strlen($newtext));
	fclose($file);

}

function addFilm ($n) {
	$url = "../bd/data.txt";
	$file = fopen($url, 'a+');

	fwrite($file, '-' . $n . '-');

	print json_encode("Added");

	fclose($file);
}

function isChecked ($n) {

	$url = "../bd/data.txt";
	$file = fopen($url, 'w+');

	$id = '-' . $n . '-' ;
	$pos = strpos(fread($file, filesize($url)), $id);

	return $pos;

	fclose($file);
}



?>