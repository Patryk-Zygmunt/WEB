<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Zakładanie bloga</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>

<?php 

$tytul= $_POST["tytul"];                                           
$tytul= str_replace(' ', '-', $tytul);


if (!is_dir($tytul)) { 
	mkdir($tytul, 0777, true);
	$info = fopen($tytul."/info", "w");
	flock($info,LOCK_EX);
	$nazwa = "Nazwa użytkownika: ".$_POST["nazwa"]."\n";
	fwrite($info, $nazwa);
	$passwd = $_POST["haslo"];
	$pass = md5($passwd); 
	fwrite($info, "Hasło uzytkownika: ".$pass."\n");
	fwrite($info, $_POST["opis"]);
	fclose($info);
	flock($info,LOCK_UN);
	header("Location: blog.php"); 
} else {
header("Location: formularz_blogu.php?zajety=true"); 
	exit();
}


?>
</body>
</html>
