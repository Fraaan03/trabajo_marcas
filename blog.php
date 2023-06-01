<?php include("conexion.php");

if (isset($_GET["id_articulo"])) {
    $id_articulo = $_GET["id_articulo"];
    //si la url lleva la variable id_categoria, mostramos los libros de dicha categoría
    $articulos = $conexion->query("SELECT * FROM articulos WHERE id_articulo=$id_articulo");
} else {
    //si no lleva la variable, mostramos todos los libros
    $articulos = $conexion->query("SELECT * FROM articulos");
}
$most_popular = $conexion->query("SELECT * FROM articulos ORDER BY visitas DESC LIMIT 4");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <title>Peliculas</title>
</head>

<body>

<div id="contenedor">
<div id="encabezado">
            <div id="logo">
              <img src="../img/Captura de pantalla 2023-05-20 203059.png" alt="logo">
            </div>
            <div id="menu">
              <ul class="horizontal">
                <li><a href="principal.php">Home</a>
                  <ul class="submenu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Inicio</a></li>
                  </ul>
                </li>
                <li><a href="formulario.html">Log In</a>
                  <ul class="submenu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Inicio</a></li>
                  </ul>
                </li>
                <li><a href="#">Gallery</a>
                  <ul class="submenu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Inicio</a></li>
                  </ul>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="../html/contacto.html">Contact</a></li>
              </ul>
            </div>
          </div>
        <div class="izquierda">
            <?php
            while ($fila = $articulos->fetch_array()) {
                $id_articulo = $fila[0];
                $titulo = $fila[1];
                $imagen = $fila[2];
                $articulo = $fila[3];
                $fecha = $fila[4];
                $cometarios = $fila[5];
                $director = $fila[6];
                $visitas = $fila[7];
                ?>

                <div class="noticias">
                    <div class="imagen">
                        <img src="../img/<?php echo $imagen; ?>" width="200px" height="200px" />
                    </div>
                    <div class="informacion">
                    <div class="titulo">
                        <h2>
                            <?php echo $titulo; ?>
                        </h2>

                    </div>
                    <div class="articulo">
                        <p>
                            <?php echo $articulo; ?>
                        </p>
                    </div>
                    </div>
                    <input type="checkbox" id="mostrar-mas" class="oculto">
                    <label for="mostrar-mas" class="boton">Leer más</label>
                    <div class="texto-completo">
                        <p><?php echo $textoCompleto; ?></p>
                    </div>
                    <div class="etiquetas">
                    <div class="fecha">
                        <p>
                            <?php echo $fecha; ?>
                        </p>
                    </div>
                    <div class="comentarios">
                        <p>
                            <?php echo $comentarios; ?>
                        </p>
                    </div>
                    <div class="director">
                        <p>
                            <?php echo $director; ?>
                        </p>
                    </div>
                    <div class="visitas">
                        <p>
                            <?php echo $visitas; ?>
                        </p>
                    </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
        <div class="derecha">
            <div id="categoria">
                <h3>CATEGORIAS</h3>
            </div>
            <div id="popular">
                <h3>POPULAR POST</h3>
            <?php
            while ($fila = $most_popular->fetch_array()) {
                $titulo = $fila[1];
                $imagen = $fila[2];
                $director = $fila[6];
                ?>
                <div class="noticias-popular">
                    <div class="imagen-popular">
                        <img src="../img/<?php echo $imagen; ?>" width="50px" height="50px" />
                    </div>
                    <div class="informacion-popular">
                    <div class="titulo-popular">
                        <h2>
                            <?php echo $titulo; ?>
                        </h2>
                    </div>
                    <div class="director-popular">
                        <p>
                            <?php echo $director; ?>
                        </p>
                    </div>
                    </div>
                </div>

                <?php
            }
            ?>        


            </div>



            <div id="more">
                <h3>MORE INFO</h3>
            </div>
            <div id="video">
                <h3>VIDEO</h3>
                <iframe width="400" height="200" src="https://www.youtube.com/embed/lSm4QZqN8cA"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        </div>
        <p class="limpiar"></p>
</body>

</html>