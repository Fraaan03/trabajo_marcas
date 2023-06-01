<?php
            while($row=$result->fetch_array()){
            ?>
                <div class="noticia">
                <img src="./img/detalles/<?php echo $row[1] ?>" />
                <div id="lupa" href="#"></div>
                <div id="detalles" ><a href="./detalles.php?codigo=<?php echo $row[0];?>"></a></div>
                <p><b><?php echo $row[2]; ?></b></p>
                <p><?php echo $row[3]; ?></p>
                </div>
            
            <?php } ?>