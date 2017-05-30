<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Dodawanie komentarza</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body style="background-color: grey">





	<div ><form action="koment.php" method="post">
		
		<INPUT type="HIDDEN" NAME="blog" VALUE="<?php echo $_GET['nazwa'] ?>">
	<INPUT type="HIDDEN" NAME="wpis" VALUE="<?php echo $_GET['wpis'] ?>">
		Treść komentarza:<br/><textarea name="komentarz" cols="30" rows="4" wrap="soft"></textarea><br/>
		<br/>
		Imię/Nazwisko/Pseudonim: <br/><input type="text" name="pseudonim" ><br/>
		<br/>
				Rodzaj: 

		<select name="rodzaj">
			<option value="pozytywny">Pozytywny;</option>
			<option value="negatywny">Negatywny</option>
			<option value="neutralny">Neutralny</option>
		</select><br/>
		<input type="submit" value="Potwierdź">
		<input type="reset" value="Wyczyść">	
	</form></div>		
</body>
</html>
