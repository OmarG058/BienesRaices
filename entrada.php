<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
 ?>
    

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia de la decoracion de tu hogar</h1>
    
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
                      
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores atque a tempore commodi eum, repellat ex, accusantium ratione quos dolorum fuga. Quis repudiandae quasi libero quisquam recusandae harum eos sequi a culpa incidunt, eaque, accusantium facere. Veniam ab animi adipisci. Amet omnis obcaecati cupiditate ex distinctio dignissimos ea dolorum hic corporis laborum nulla, quidem quam! Dicta molestiae repellendus libero culpa!
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nisi accusantium sit, expedita beatae, voluptate labore fuga eum enim soluta ab error. Dolor pariatur maiores necessitatibus sint est modi ex!
            </p>
        </div>

    </main>


<?php   
    incluirTemplate('footer');
?>