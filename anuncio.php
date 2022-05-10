
<?php 

//obtener el id de la propiedad seleccionada
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT); //VALIDAR QUE SEA UN ENTERO o id válido
if (!$id){
    header('Location: /');
}

// incluir la conexion a la bd
require "includes/config/database.php";
$db = conectarDB();


//Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
if (!$resultado->num_rows){ //si no es un id valido lo regresa a index num_rows te dice si hubo o no respuesta
    header('Location: /');
}
$propiedad = mysqli_fetch_assoc($resultado);





require "includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-centrado">

        <h1><?php echo $propiedad['titulo'];?></h1>
     
       
            <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'];?>" alt="imagen de la propiedad">
    

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio'];?></p>
            <ul class="iconos-caracteristicas">
                <li>
                   <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                   <p><?php echo $propiedad['wc'];?></p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'];?></p>
                 </li>

                 <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedad['habitaciones'];?></p>
                 </li>
            </ul>
            
            <?php echo $propiedad['descripcion'];?>
        
        
        </div>
    </main>
    <?php 
    mysqli_close($db);
    incluirTemplate("footer");
 ?>