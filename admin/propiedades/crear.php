<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <form class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="" id="descripcion" placeholder="Descripcion de la propiedad"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>


            <label for="habitaciones">Numero de Habitaciones</label>
            <input type="number" for="habitaciones">

            
        </fieldset>
    </form>
</main>


<?php
    incluirTemplate('footer');
?>