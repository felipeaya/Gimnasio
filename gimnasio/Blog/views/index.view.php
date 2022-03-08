<?php require 'header.php'?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Entrenar Cardio </h2>
                <p class="fecha">07 de marzo del 2022 </p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/images/blog1.jpg" alt=""></a>
                </div>
                <p class="extracto"> Este es mi Extracto para mi Articulo </p>
                <a href="single.php" class="continuar">Continuar Leyendo </a>
            </article>
        </div> 
    </div>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Lugar de Entrenamiento </h2>
                <p class="fecha">07 de marzo del 2022 </p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/images/blog2.jpg" alt=""></a>
                </div>
                <p class="extracto"> Este es mi Extracto para mi Articulo </p>
                <a href="single1.view.php" class="continuar">Continuar Leyendo </a>
            </article>
        </div> 
    </div>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Maquinas Totalmente Nuevas </h2>
                <p class="fecha">07 de marzo del 2022 </p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/images/blog3.jpg" alt=""></a>
                </div>
                <p class="extracto"> Este es mi Extracto para mi Articulo </p>
                <a href="single.php" class="continuar">Continuar Leyendo </a>
            </article>
        </div> 
        <?php require 'paginacion.php'?>
    </div>

<?php require 'footer.php'?>