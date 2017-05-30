<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tworzenie wpisu</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body style="background-color: grey">
<?php
include 'menu.php';
menu();
if($_GET["zajety"]=="true"){
echo "<h1> Blog o podanym tytule istnieje</h1><br/>";}
?>


		<div><form action="nowy.php" method="post">
		Tytuł bloga<br/><input type="text" name="tytul" required/><br/>
		Nazwa <br/><input type="text" name="nazwa" required/><br/>
		Hasło<br/><input type="password" name="haslo" required/><br/>
		Opis bloga<br/><textarea name="opis" cols="50" rows="4" wrap="soft"></textarea><br/>
		<br/>
		<input type="submit" value="Załóż   bloga "/>
		<input type="reset" value="Reset"/>	
	</form></div>		

</body>
</html>