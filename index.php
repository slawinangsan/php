<html>
<head>
</head>
<body>

<?php

echo date('Y-m-d H:i:s');
echo 'Test PHP';

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$rok_urodzenia = $_POST['rok_urodzenia'];
$miejsce_urodzenia = $_POST['miejsce_urodzenia'];
  
$lata = date('Y') - $rok_urodzenia;
 'Cześć ' .$imie. .$nazwisko.;
$string = 'Cześć ' .$imie. .$nazwisko. 'Urodziłem/am się w/we ' .$miejsce_urodzenia.'. Mam '.$lata.' lat.';
 
echo $string
  ?>


</body>
</html>
