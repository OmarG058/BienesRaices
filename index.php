<?php
    declare (strict_types = 1); //verifica los tipos de parametros que espera la funcion 
    require 'includes/funciones.php';   
    incluirTemplate('header',$inicio = true);
 ?>
    

    <main class="contenedor seccion">
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

    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture> <!--Cuando el navegador no soporta webp picture carga otra img asignada-->
                    <source srcset="build/img/anuncio1.webp" type="/image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="/image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa de lujo en el lago con exelente vista, acbados de lujo a un exelente precio</p>
                    <p class="precio">$3,000,000</p>

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

                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div> <!--contenido-anuncio-->
            </div> <!--anuncio-->

            <div class="anuncio">
                <picture> <!--Cuando el navegador no soporta webp picture carga otra img asignada-->
                    <source srcset="build/img/anuncio2.webp" type="/image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="/image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa de lujo en el lago con exelente vista, acbados de lujo a un exelente precio</p>
                    <p class="precio">$3,000,000</p>

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

                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div> <!--contenido-anuncio-->
            </div> <!--anuncio-->

            <div class="anuncio">
                <picture> <!--Cuando el navegador no soporta webp picture carga otra img asignada-->
                    <source srcset="build/img/anuncio3.webp" type="/image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="/image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa de lujo en el lago con exelente vista, acbados de lujo a un exelente precio</p>
                    <p class="precio">$3,000,000</p>

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

                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div> <!--contenido-anuncio-->
            </div> <!--anuncio-->

        </div> <!--contenedor-anuncios-->

        <div class="ver-todas aliniar-derecha">
            <a class="boton-verde" href="anuncios.php">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto"> 
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lllena el formulario de contacto y un asesor se pondrá en contacto contigo</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog"> <!--Usa section cuendo el primer elemento es un encabezado o título-->
            <h3>Nuestro Blog</h3> <!--simpre usa article cuando sea un blog-->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>

            </article> <!--.entrada-blog-->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>

                        <p>
                            Maximisa el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article> <!--.entrada-blog-->

        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- ReneGul</p>
            </div>
        </section>
    </div>

<?php   
    incluirTemplate('footer');
?>
