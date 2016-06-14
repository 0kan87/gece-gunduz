<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	h1 {color:white; font-family: tahoma; text-align:center;}
</style>

<?php 
if("06:00"< date("H:i") && date("H:i")<"12:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/sabah.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // SABAH 
}elseif("12:00"<date("H:i")&& date("H:i")<"18:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/ikindi.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // ÖĞLEDEN SONRA İKİNDİ 
}elseif("18:00"<date("H:i")&& date("H:i")<"24:00"){ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/aksam.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // AKŞAM 
}else{ 
    echo "<style type='text/css'>body {background: #3e3e3e url('img/gece.jpg')
    no-repeat fixed center;
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}</style>"; // GECE 
}  
?>

</head>
<body>
<?php 
if("06:00"< date("H:i") && date("H:i")<"12:00"){ 
    echo "<h1>Şuan Saat 06:00 ile 12:00 arası olduğundan Sabah olarak kabul ediyorum ve bu resmi gösteriyorum.</h1>"; // SABAH 
}elseif("12:00"<date("H:i")&& date("H:i")<"18:00"){ 
    echo "<h1>Şuan Saat 12:00 ile 18:00 arası olduğundan İkindi olarak kabul ediyorum ve bu resmi gösteriyorum.</h1>"; // ÖĞLEDEN SONRA İKİNDİ 
}elseif("18:00"<date("H:i")&& date("H:i")<"24:00"){ 
    echo "<h1>Şuan Saat 18:00 ile 24:00 arası olduğundan Akşam olarak kabul ediyorum ve bu resmi gösteriyorum.</h1>"; // AKŞAM 
}else{ 
    echo "<h1>Şuan Saat 24:00'den sonrası olduğundan Gece olarak kabul ediyorum ve bu resmi gösteriyorum.</h1>"; // GECE 
}  
?>

</body>
</html>
