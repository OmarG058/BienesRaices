<?php
    //Base de datos
    require '../../includes/config/database.php';
    $db = conectarDb();


    if($_SERVER["REQUEST_METHOD"] === 'POST') {

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
         

    require '../../includes/funciones.php';
    incluirTemplate('header');

    
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="" id="descripcion" name="descripcion" placeholder="Descripcion de la propiedad"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Numero de Habitaciones</label>
            <input type="number" for="habitaciones" placeholder="Ejem: 3" min="1" max="8">

            <label for="wc">Baños:</label>
            <input type="number" min="1" max="9" id="wc" placeholder="Ejem: 2">

            <label for="estacionamiento">Estacionamineto:</label>
            <input type="number" min="1" max="10" id="estacionamiento" placeholder="Ejem: 2">            
        </fieldset>


        <fieldset>
            <legend>Vendedor</legend>
            <select name="" id="">
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