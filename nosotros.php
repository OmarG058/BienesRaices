<?php
    require 'includes/funciones.php';   
    incluirTemplate('header');
 ?>
    
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture >
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jepg">
                    <img loading="lazy" src="build//img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote> <!--blockquote se utiliza para citar textos o frases de otras fuentes  -->
                    25 Años de Experienacia 
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel maiores libero impedit doloribus. Odio quaerat blanditiis quisquam omnis nostrum iusto aliquam nihil culpa voluptas asperiores error quasi, molestias consequuntur. Tempore magni sequi soluta, iusto est ullam rem quidem blanditiis fugit quo praesentium minus eaque! Ullam incidunt nesciunt blanditiis quidem aut molestias similique aperiam dolorem quae?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis ullam eveniet eos error impedit harum blanditiis nam omnis non sint!
                </p>
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nostros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in, molestias expedita, deleniti mollitia vel ab architecto autem cum porro earum est quia illum fugiat! Ipsam temporibus minima quis voluptas!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in, molestias expedita, deleniti mollitia vel ab architecto autem cum porro earum est quia illum fugiat! Ipsam temporibus minima quis voluptas!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam in, molestias expedita, deleniti mollitia vel ab architecto autem cum porro earum est quia illum fugiat! Ipsam temporibus minima quis voluptas!</p>
            </div>

        </div>

    </section>

<?php   
    incluirTemplate('footer');
?>