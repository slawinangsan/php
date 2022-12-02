<?php

(string)$imie = $_POST['imie'];
(string)$nazwisko = $_POST['nazwisko'];
(int)$rok_urodzenia = $_POST['rok_urodzenia'];
(string)$miejsce_urodzenia = $_POST['miejsce_urodzenia'];
(string)$email = $_POST['email'];
  
$stare_wpisy = file_get_contents('baza.txt');
$nowe_wpisy = $stare_wpisy.PHP_EOL.$email;
if (file_put_contents('baza.txt',$nowe_wpisy)!==false){
  echo 'ok';
}else{
  echo 'blad';

(int)$lata = (int)date('Y') - $rok_urodzenia;

(string)$string = 'Cześć ' .$imie. .$nazwisko. 'Urodziłem/am się w/we ' .$miejsce_urodzenia.'. Mam '.$lata.' lat.';
 
echo $string
 
?>
