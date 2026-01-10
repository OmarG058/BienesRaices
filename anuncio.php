<?php include 'includes/templates/header.php';?>
    

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                $3,000,000
            </p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                    <p>4</p>
                </li>
            </ul>
            
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores atque a tempore commodi eum, repellat ex, accusantium ratione quos dolorum fuga. Quis repudiandae quasi libero quisquam recusandae harum eos sequi a culpa incidunt, eaque, accusantium facere. Veniam ab animi adipisci. Amet omnis obcaecati cupiditate ex distinctio dignissimos ea dolorum hic corporis laborum nulla, quidem quam! Dicta molestiae repellendus libero culpa!
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nisi accusantium sit, expedita beatae, voluptate labore fuga eum enim soluta ab error. Dolor pariatur maiores necessitatibus sint est modi ex!
            </p>
        </div>

    </main>

<?php   
    include 'includes/templates/footer.php'
?>
