<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $data = $name . ' ' . $email . "\n";
  $file = fopen('datos.txt', 'a');
  fwrite($file, $data);
  fclose($file);
  echo 'Datos guardados correctamente';
}
?>
