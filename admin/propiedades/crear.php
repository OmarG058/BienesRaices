<?php
    //Base de datos
    require '../../includes/config/database.php';
    $db = conectarDb();

    //Array con mensajes de errores
    $errores = [];


 
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedor = ''; 

    //Ejecutar el codigo despues de la validacion
    if($_SERVER["REQUEST_METHOD"] === 'POST') {

        // super global para verificar que envia el servidor _SERVER _POST _GET accedemos a ellos como arreglos
        // echo "<pre>";
        //  var_dump($_POST);
        // echo "</pre>"; 
        //varables que otorga el metodo POST  atraves de name en el formulario
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor = $_POST['vendedor']; 

        if(!$titulo) {
            $errores [] = "Debes añadir un titulo";
        }
        
        if(!$precio) {
            $errores [] = "Debes añadir un precio";
        }

        if(strlen($descripcion) < 50 ) {
            $errores [] = "la descripcion es obligatoria y debe tener almenos 50 caracteres";
        }

        if(!$habitaciones){
         $errores [] = "el numero de habitaciones es obligatorio";
        }

        if(!$wc) {
            $errores [] = "El numero de baños es obligatorio";
        }

        if(!$estacionamiento) {
            $errores [] = "El numero de estacionamiento es obligatorio";
        } 

        if(!$vendedor) {
            $errores [] = "Elige un vendedor";
        } 

        //var_dump($errores);

        //Revisar el arreglo de errores para proceder a insertar
        if(empty($errores)){

            //INSERTAR EN LA BASE DE DATOS 
            $query = "INSERT INTO propiedades 
                (titulo, precio, dscripcion, habitaciones, wc, estacionamiento, vendedores_Id )
                VALUES ('$titulo', '$precio', '$descripcion','$habitaciones', '$wc', '$estacionamiento', '$vendedor')"; 

            echo $query;

            $resultado = mysqli_query($db, $query);

            if ($resultado === true) {
                echo "insertado corrctamente ";
                echo var_dump($resultado);
            } else {
                echo "no se inserto";
            }



        }
    }        
    require '../../includes/funciones.php';
    incluirTemplate('header');    
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <!-- mostar validaciones -->
     <!-- error es la variable identificadora de los errores a salir -->
    <?php  foreach($errores as $error):  ?>
        <div class="alerta error" >
            <?php echo $error  ?>
        </div>

    <?php endforeach;    ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo$titulo?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo$precio?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Descripcion de la propiedad"> <?php echo$descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Numero de Habitaciones</label>
            <input type="number" for="habitaciones" name="habitaciones" placeholder="Ejem: 3" min="1" max="8" value="<?php echo$habitaciones?>">

            <label for="wc">Baños:</label>
            <input type="number" min="1" max="9" id="wc" name="wc" placeholder="Ejem: 2" value="<?php echo$wc?>">

            <label for="estacionamiento">Estacionamineto:</label>
            <input type="number" min="1" max="10" id="estacionamiento" name="estacionamiento" placeholder="Ejem: 2" value="<?php echo$estacionamiento?>">            
        </fieldset>


        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="">
                <option value="">--Selecciones un vendedor--</option>
                <option value="1">Omar </option>
                <option value="2">Ana</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>


<?php
    incluirTemplate('footer');
?>