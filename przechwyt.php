<?php

(string)$imie = $_POST['imie'];
(string)$nazwisko = $_POST['nazwisko'];
(int)$rok_urodzenia = $_POST['rok_urodzenia'];
(string)$miejsce_urodzenia = $_POST['miejsce_urodzenia'];
  
(int)$lata = (int)date('Y') - $rok_urodzenia;

(string)$string = 'Cześć ' .$imie. .$nazwisko. 'Urodziłem/am się w/we ' .$miejsce_urodzenia.'. Mam '.$lata.' lat.';
 
echo $string
 
?>
