<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Dodawanie komentarza</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>

<?php
// Funkcja wypisujaca menu
function menu() {
	echo " 
	<div>
		<ul>
			<li style=\" list-style-type: none; \"><a href=\"blog.php\">Wszystkie blogi</a></li>
			<li style=\" list-style-type: none;\"><a href=\"formularz_wpis.php?find=true\">Nowy wpis</a></li>
			<li style=\" list-style-type: none;\"><a href=\"formularz_blogu.php?zajety=false\">Nowy blog</a></li>
		</ul>
	</div> 
	";
}
?>
</body>
</html>
