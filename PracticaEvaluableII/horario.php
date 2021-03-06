<!doctype html> <html lang="es">
<head>
<meta charset="utf­8">
<title>Pr&aacute;ctica Evaluable I</title>
<link rel="stylesheet" type="text/css" href="aspecto.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>

  <header>
    <section class="logo">
      <img src = "imagenes/logo.jpeg" alt = "Logotipo del Centro Deportivo" width="125px" height="100px"/>
    </section>

    <section class="titulo">
      <h2>Centro Deportivo</h2>
      <h1>SERFIT</h1>
      <h4>Sacrificio&plus;Energ&iacute;a&equals;Resultados</h4>
    </section>

    <?php
      include("registro.php");
    ?>
  </header>

<br/>

<section class="menuh">
  <ul class="menuhorizontal">
    <li><a href="actividades.php"> Actividades</a></li>
    <li><a href="horario.php"> Horario</a></li>
    <li><a href="tecnicos.php"> T&eacute;cnicos</a></li>
    <li><a href="instalaciones.php"> Instalaciones y Servicios</a></li>
    <li><a href="localizacion.php">Localizaci&oacute;n</a></li>
    <li><a href="precios.php">Precios y Promociones</a></li>
    <?php
    if(!isset($_SESSION['loggedin'])){
      echo '<li><a href="usuario.php">Alta Usuario</a></li>';
    }else{
      echo '<li><a href="perfil.php">Perfil</a></li>';
    }
    ?>
    <?php
    if(!isset($_SESSION['loggedin'])){
      echo '<li><a>Foro</a></li>';
    }else{
      echo '<li><a href="foro.php">Foro</a></li>';
    }
    ?>
  </ul>
</section>

<h1 class="tituloactividades">Horario</h1>



<table border="1" summary="Tabla de Actividades" class="horario">
<caption></caption> <thead>
  <tr>
    <td> </td>
    <td>Luness</td>
    <td>Martes</td>
    <td>Mi&eacute;rcoles</td>
    <td>Jueves</td>
    <td>Viernes</td>
    <td>S&aacute;bado</td>
  </tr>

</thead>
<tbody>

<tr>
<td>07:00</td>
<td>Cicling Life</td>
<td>Body Pump</td>
<td>Cicling Life</td>
<td>Body Pump</td>
<td>Cicling Life</td>
<td> </td>
</tr>

<tr>
  <td>08:00</td>
  <td>Body Combat</td>
  <td>Cicling Life</td>
  <td>Body Combat</td>
  <td>Cicling Life</td>
  <td>Body Combat</td>
  <td> </td>
</tr>

<tr>
  <td>09:00</td>
  <td>Zumba</td>
  <td>Step</td>
  <td>Zumba</td>
  <td>Step</td>
  <td>Zumba</td>
  <td> </td>
</tr>

<tr>
  <td>10:00</td>
  <td>Body Pump</td>
  <td>GAP</td>
  <td>Body Pump</td>
  <td>GAP</td>
  <td>Body Pump</td>
  <td>Cicling Life</td>
</tr>

<tr>
  <td>11:00</td>
  <td>Yoga</td>
  <td>Cicling Life</td>
  <td>Yoga</td>
  <td>Cicling Life</td>
  <td>Yoga</td>
  <td>Body Pump</td>
</tr>

<tr>
  <td>12:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td>Cicling Life</td>
</tr>

<tr>
  <td>14:00</td>
  <td>Body Pump</td>
  <td>Cicling Life</td>
  <td>Body Pump</td>
  <td>Cicling Life</td>
  <td>Body Pump</td>
  <td> </td>
</tr>

<tr>
  <td>15:00</td>
  <td>Cicling Life</td>
  <td>Pilates</td>
  <td>Cicling Life</td>
  <td>Pilates</td>
  <td>Cicling Life</td>
  <td> </td>
</tr>

<tr>
  <td>17:00</td>
  <td>Pilates</td>
  <td>Zumba</td>
  <td>Pilates</td>
  <td>Zumba</td>
  <td>Pilates</td>
  <td> </td>
</tr>

<tr>
<td>18:00</td>
<td>Cicling Life</td>
<td>Body Pump</td>
<td>Cicling Life</td>
<td>Body Pump</td>
<td>Cicling Life</td>
<td> </td>
</tr>

<tr>
  <td>19:00</td>
  <td>Body Pump</td>
  <td>Body Combat</td>
  <td>Body Pump</td>
  <td>Body Combat</td>
  <td>Body Pump</td>
  <td> </td>
</tr>

<tr>
  <td>20:00</td>
  <td>GAP</td>
  <td>Cicling Life</td>
  <td>GAP</td>
  <td>Cicling Life</td>
  <td>GAP</td>
  <td> </td>
</tr>

<tr>
  <td>21:00</td>
  <td>Body Pump</td>
  <td>Pilates</td>
  <td>Zumba</td>
  <td>Cicling Life</td>
  <td> </td>
  <td> </td>
</tr>

</tbody>
</table>
<br/>
<br/>
<br/>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>


</body> </html>
