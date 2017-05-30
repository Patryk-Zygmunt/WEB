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
if($_GET["find"]=="false"){
echo '<h1 style="color=red"> Błędny login lub hasło!!!</h1><br/>';}
?>


		<div ><form action="wpis.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
			Nazwa<br/><input type="text" name="nazwa" required/><br/>
			Hasło<br/><input type="password" name="haslo" required/><br/>
			Wpis<br/><textarea name="wpis" cols="50" rows="5" ></textarea><br/>
			Data<br/><input type="text" name="data" value="<?php echo date('Y-m-d');?>"  >
			Godzina<input type="text" name="godzina" value="<?php echo date('H:i');?> " ><br/>
			<br/>
			
			Załączniki:<br/>
			
			
			<input type="file" name="zalacznik1"/><br/>
			<input type="file" name="zalacznik2"/><br/>
			<input type="file" name="zalacznik3"/><br/>
			<input type="submit" value="Nowy wpis"/><br/>
			<input type="reset" value="Reset"/>	
		</form></div>		

</body>
</html>