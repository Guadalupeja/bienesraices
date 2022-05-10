<?php 

require "includes/funciones.php";

incluirTemplate("header");
 ?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Ut quis tellus quis orci interdum malesuada sed ac lectus. Suspendisse tristique porttitor ullamcorper. 
                    Sed at vestibulum sapien. Curabitur at dolor sed turpis feugiat dignissim. Vivamus lobortis et tellus vel interdum.
                     Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. 
                     Nunc id massa pharetra, convallis mauris in, venenatis tellus. Morbi faucibus erat blandit, ornare felis in, 
                     imperdiet tortor. Aliquam sed mollis erat, eget laoreet ligula. 
                </p>
                <p>
                    Morbi faucibus erat blandit, ornare felis in, 
                     imperdiet tortor. Aliquam sed mollis erat, eget laoreet ligula. Etiam fringilla mollis pellentesque.
                      Morbi tristique, risus non bibendum luctus, ex purus sagittis erat, at imperdiet felis felis vitae sem. 
                      Pellentesque nec tortor elementum.
                </p>
            </div>
        </div>
    </main>
    




    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. When an unknown printer
                     took a galley of type and scrambled it to make a type specimen book.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. When an unknown printer
                     took a galley of type and scrambled it to make a type specimen book.</p>
            </div>



            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. When an unknown printer
                     took a galley of type and scrambled it to make a type specimen book.</p>
            </div>


        </div>
    </section>

    <?php 
    incluirTemplate("footer");
 ?>