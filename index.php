<html>
<head>
</head>
<body>
 
 <?php
  echo date('Y-m-d H:i:s')
 ?>

<form action="przechwyt.php" method="post">
  Imie: <input type="text" name="imie" /><br />
  Nazwisko: <input type="text" name="nazwisko" /><br />
  Rok urodzenia: <input type="text" name="rok_urodzenia" /><br />
  Miejsce urodzenia: <input type="text" name="miejsce_urodzenia" /><br />
  
  wprowdz email: <input type="text" name="email" /><br />
  <input type="submit" value="wyślij" />
  
</form>  


</body>
</html>
