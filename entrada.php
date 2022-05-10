<?php 

require "includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
      
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span>POR: <span>Admin</span> </p>

        <div class="resumen-propiedad">
            
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id interdum ante.
                 In sed iaculis purus, sed elementum est. Etiam condimentum libero a sem finibus scelerisque. 
                 Donec congue efficitur viverra. Etiam a ligula felis. Duis commodo sapien nec mi elementum, 
                 quis mattis ex pretium. Ut quis rhoncus dui. 
                Proin auctor nec quam quis lobortis. Mauris consectetur dictum enim, eget tristique tellus posuere a.
            </p>
            <p>
                Nam interdum sapien et turpis eleifend, eget condimentum leo fringilla. 
                Proin non dictum libero. Orci varius natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. In vel arcu lacus. Morbi eleifend rhoncus mollis. Maecenas fringilla,
                 neque non lacinia laoreet, erat augue viverra lectus, ac lacinia purus magna vitae nibh. 
                 Quisque nibh felis, imperdiet et consectetur eget, sagittis eu eros. Nunc rhoncus odio non 
                 orci vulputate tempus. Etiam pulvinar elit libero, vel vulputate magna facilisis in. 
                 Duis pellentesque laoreet urna,
                 quis accumsan ligula accumsan eget. Etiam porttitor felis nec nunc rutrum, id elementum odio lobortis.
            </p>
        </div>
    </main>
    <?php 
    incluirTemplate("footer");
 ?>