<?php
include("./conexion.php");
$codigo=$_GET['codigo'];
$query = "SELECT * FROM Detalles WHERE ID=$codigo";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  $ID = $row['ID'];
  $titulo = $row['titulo'];
  $subtitulo = $row['subtitulo'];
  $resumen = $row['resumen'];
  $año = $row['año'];
  $director = $row['director'];
  $imagen = $row['imagen'];
}

else {

  $ID = '';
  $titulo = 'No hay datos disponibles';
  $subtitulo = '';
  $resumen = '';
  $año = '';
  $director = '';
  $imagen = '';
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="../css/detalles.css">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- JS ================================================== -->

</head>

<body>
    <div id="contenedor">
        <div id="imagen">
            <img src="../img/<?php echo $imagen ?>"/>
        </div>
        <div id="informacion">
            <div class="encabezado">
                <h1 class="titulo">
                    <?php echo $titulo; ?>
                </h1>
                <h3 class="subtitulo">
                    <?php echo $subtitulo; ?>
                </h3>
            </div>
                <div class="resumen">
                <p>
                <?php echo $resumen; ?>
                </p>
                </div>
                <div class="detalles">
                    <div class="año">
                        <h1>
                            AÑO:
                           </h1>
                        <p>
                        <?php echo $año; ?>
                        </p>
                    </div>
                    <div class="director">
                        <h1>
                            DIRECTOR:
                        </h1>
                        <p>
                        <?php echo $director; ?>
                        </p>
                    </div>
                </div>
            <a class="boton-volver" href="principal.php">Volver</a>
            <a class="mas-info" href="#">Mas Información...</a>
        </div>
    </div>
</body>

</html>