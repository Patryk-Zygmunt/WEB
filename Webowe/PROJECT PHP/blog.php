<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Przeglądanie bloga</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body style="background-color: grey">

<?php

include 'menu.php';
menu();

if(isset($_GET["nazwa"])){
	
	$nazwa=$_GET["nazwa"];
		if(!is_dir($nazwa)){
			echo "Blog o podanej nazwie nie istnieje ";
			goto spis;
			
			
		}

	echo "$nazwa <br>";
	chdir("$nazwa");
	$pliki=glob('[0-9]*');
	//print_r($pliki);
	foreach($pliki as $plik){
		if(is_file($plik)){
	       if(strlen($plik)==16){
			echo "<h1>WPIS:</h1>";
			$read = file($plik);
		
			
			echo "<p>";
			foreach ($read as &$line) {
				echo $line."<br/>";
			}
				foreach($pliki as $file){
				if((strlen($file)>16)&&(is_file($file))){
				//	echo "18</br>";
					if(substr($file,0,16)==substr($plik,0,16)){
						echo"załącznik:";
						echo "<a href=\"$nazwa/$file\">".$file."</a><br/>";
					}
					
				}
			}
			
				echo "<a href=\"komentarze.php?nazwa=$nazwa&wpis=$plik\">Dodaj komentarz.</a><br/>";
			
					if (is_dir($plik.'.k')) { 
				echo "<h4>Komentarze:</h4>";
				$koment = glob($plik.'.k/*'); 
				arsort($koment);
				foreach($koment as &$kom) {
					$read = file($kom);
					echo "<p>";
					
					foreach ($read as &$line) { 
							echo $line."<br/>";
						
					
					}
					
				}
			}
		   }}

			
		
	}
	
}



spis:
if (!isset($_GET["nazwa"])) {
		$blogi = glob('*', GLOB_ONLYDIR);
		echo"Wszystkie blogi:<br/>";
		foreach ($blogi  as $blog) {
		echo "<a href=blog.php?nazwa=$blog>$blog</a><br/>";
	}
	
}





?>
</body>
</html>
