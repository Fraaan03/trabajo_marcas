<?php
include("./conexion.php");
$query = "SELECT * FROM Detalles";
$result = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de frangil</title>
    <!-- CSS-->
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div id="contenedor">
        <div id="encabezado">
            <div id="logo">
              <img src="../img/Captura de pantalla 2023-05-20 203059.png" alt="logo">
            </div>
            <div id="menu">
              <ul class="horizontal">
                <li><a href="#">Home</a>
                  <ul class="submenu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Inicio</a></li>
                  </ul>
                </li>
                <li><a href="http://localhost:8080/prueba/Formulario3.jsp">Log In</a>
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
                <li><a href="contacto.html">Contact</a></li>
              </ul>
            </div>
          </div>
        <p class="limpiar"></p>
        <div id="contenedor-galeria">
            <div class="teexto">
            <h2>MOVIEMANIA</h2>
            <p> Bienvenidos a MovieMania, tu portal dedicado a descubrir y compartir las mejores películas. Sumérgete en un mundo de historias cautivadoras y personajes inolvidables, mientras exploras nuestras recomendaciones cuidadosamente seleccionadas. Nuestra misión es compartir la magia del cine y dar a conocer joyas ocultas que merecen ser vistas por el público. Únete a nosotros y déjate llevar por la emoción del séptimo arte en MovieMania.</p>
            </div>
            <div id="galeria">
            <div><img src="../img/gladiator2.webp" /></div>
            <div><img src="../img/titanic2.jpg" /></div>
            <div><img src="../img/la la land2.jpg" /></div>
            <div><img src="../img/el rey leon2.jpeg" /></div>
        </div>
        </div>
        <p class="limpiar"></p>
        <div class="contenido">
        <?php
            while($row=$result->fetch_array()){
            ?>
            <div class="noticia">
                <img src="../img/<?php echo $row[6] ?>">
                <h4><?php echo $row[1]; ?></h4>
                <p><?php echo $row[2]; ?></p>
                <div class="lupa">
                    <a href="solvam"></a>
                </div>
                <div class="detalles">
                    <a href="detalles.php?codigo=<?php echo $row[0];?>"></a>
                </div>
                <p class="limpiar"></p>
            </div>
            <?php } ?>
            
            <p class="limpiar"></p>
        </div>
        <div id="pie">
            <div class="pie1">
                <h4>SOBRE NOSOTROS</h4>
                <img src="../img/Captura de pantalla 2023-05-20 203059.png" alt="logo">
                <a href="#"></a>
            </div>
            <div class="pie2">
                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1539.8819991583775!2d-0.3598572033108233!3d39.474659993103685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6048bd2129f74b%3A0x7504540b8de53e49!2sEstadio%20de%20Mestalla!5e0!3m2!1ses!2ses!4v1684482967772!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="pie3"></div>
            <div class="pie4">
                <iframe width="260" height="220" src="https://www.youtube.com/embed/lSm4QZqN8cA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          
            <div class="pie5">
            </div>
            <div class="pie5">
            <div class="copyright"></div>
            <div class="menu_final">
                    <ul class="horizontal2">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
            </div>
            </div>
        </div>
    </div>
</body>
</html>