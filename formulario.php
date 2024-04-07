<link type="text/css" rel="stylesheet" href="css/estilo.css">
<link type="text/css" rel="stylesheet" href="bs/css/bootstrap.min.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["uname"];
  $last = $_POST["ulast"];
  $direccion = $_POST["direccion"];
  $localidad = $_POST["localidad"];
  $provincia = $_POST["provincia"];
  $fechanac = $_POST["fechanacimiento"];
  $password = $_POST["pswd"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  $consent = $_POST["remember"];
  if ($consent == "on") {
    $consent = "Sí";
  } else {
    $consent = "No";
  }
  echo "
   <table>
    <br>
    <tr>
      <th>Datos formulario</th>      
    </tr>        
    <tr>
      <th>Nombre Usuario </th>
      <th>Apellido </th>
      <th>Dirección </th>
      <th>Localidad </th>
      <th>Provincia </th>
      <th>Fecha Nacimiento </th>
      <th>Correo  </th>
      <th>Contraseña </th>
      <th>Comentario </th>
      <th>¿Estás de acuerdo? </th>
    </tr>
    <tr>
      <td>$name</td>
      <td>$last</td>
      <td>$direccion</td>
      <td>$localidad</td>
      <td>$provincia</td>
      <td>$fechanac</td>
      <td>$email</td>
      <td>$password</td>
      <td>$comment</td>      
      <td>$consent</td>
    </tr>
   </table>
  ";
  echo '
  <table>
    <tr>
      <td>
      <a href="index.html">Volver a la página principal</a>
      </td>
    </tr>
  </table>
  ';
}
?>