<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Zak³adanie bloga</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
</head>
<body>

<?php
//define('KEY',12345);
// $sem=sem_get(KEY);

$allDir= glob('*', GLOB_ONLYDIR);
$userBlog=$allDir[0];
$find=false;
//if ($sem != FALSE) {
  //sem_acquire($sem);

foreach ($allDir as $dir) {  
$blogFile=fopen($dir."/info", "r");
$toRead=fread($blogFile, filesize($dir."/info")); 
$word=explode(" ",$toRead);
$loginnl=$word[2];
$passnl= $word[4];
$login= explode("\n", $loginnl);
$login=$login[0];
$pass= explode("\n", $passnl);
$pass=$pass[0];
	if ($login == $_POST["nazwa"] && $pass == md5($_POST["haslo"])){
		$userBlog=$dir;
		$find= true;
	}
	
}
if($find==false){
			header("Location: formularz_wpis.php?find=false");	
			exit();
}

$nameDate = substr($_POST["data"], 0, 4).substr($_POST["data"], 5, 2).substr($_POST["data"], 8, 2).substr($_POST["godzina"], 0, 2).substr($_POST["godzina"], 3, 2).date('s');
$name=$nameDate."00";
//print_r($name);

if(glob($userBlog."/".$name)!=false){
	$dirNumb=count(glob($userBlog."/".$nameDate.'*'));
	print_r($dirNumb);
if($dirNumb<10)
	$name=$nameDate.'0'.$dirNumb;
if($dirNumb>=10)
	$name=$nameDate.$dirNumb;
	
	
}

	$wpis = fopen($userBlog."/".$name, "w"); 
			fwrite($wpis, $_POST["wpis"]);
			fclose($wpis);
			
			$location=$userBlog."/".$name;
			
		if($_FILES['zalacznik1']['error']<=0)	{
			$extension = pathinfo($_FILES['zalacznik1']['name'],PATHINFO_EXTENSION);
			move_uploaded_file($_FILES['zalacznik1']['tmp_name'],$location."1.".$extension);
		}
			
			if($_FILES["zalacznik2"]['error']<=0)	{
				$extension = pathinfo($_FILES['zalacznik2']['name'],PATHINFO_EXTENSION);
			move_uploaded_file($_FILES['zalacznik2']['tmp_name'],$location."2.".$extension);
		}
			
			if($_FILES["zalacznik3"]['error']<=0)	{
				$extension = pathinfo($_FILES['zalacznik3']['name'],PATHINFO_EXTENSION);
			move_uploaded_file($_FILES['zalacznik3']['tmp_name'],$location."3.".$extension);
			}
			
			//sem_release($sem);}

		header("Location: blog.php");	
			
			
			?>
			
			
			
			
			
