<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Dodawanie komentarza</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>

<?php
$blog=$_POST['blog'];
$wpis=$_POST['wpis'];
$path = $blog."/".$wpis.".k"; // Okreslenie nazwy katalogu dla komentarzy
if (!is_dir($path)) { // Jesli nie ma katalogu z komentarzami to tworzymy go
	mkdir($path, 0755, true);
}
$all_files = scandir($path); // Pobranie zawartosci katalogu komentarzy
$files = array_diff($all_files, array('.', '..')); // Usuniecie z tablicy elementow '.' i '..'
$count_files = count($files); // Policzenie istniejacych komentarzy
$kom = fopen($path."/".$count_files, "w"); // Stworzenie pliku komentarza
$czas = date('Y-m-d, H:i:s'); // Pobranie czasu z serwera



fwrite($kom, "Rodzaj: ".$_POST["rodzaj"]."\n"."Data: ".$czas."\n"."Login: ".$_POST["pseudonim"]."\n"."Treść: ".$_POST["komentarz"]);
fclose($kom); // Wpisanie i zamkniecie pliku




header("Location: blog.php"); // Powrot do strony bloga
?>
</body>
</html>
