<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCEDO</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Enlace a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Enlace a Bootstrap Icons -->
</head>
<body>
    {{-- Cabecera --}}
    <header>
        <nav class="main-menu">
            <ul>
                <li class="logo"><img src="{{ asset('img/logo.png') }}" alt="Accedo"></li> <!-- Logo de la empresa -->
                <li><a href="#home">Home</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#soporte-ayuda">Soporte y Ayuda</a></li>
                <li><a href="#agendar-demo">Agendar Demo</a></li>
            </ul>
        </nav>
        <div class="extra-options">
            <button class="registro-btn"><strong>Registro</strong></button> <!-- Botón de registro -->
            <button class="login-btn">
                <i class="bi bi-person-circle"></i> <!-- Icono de usuario -->
                <p><strong>Login</strong></p> <!-- Botón de login -->
            </button>
        </div>
    </header>

    {{-- Apartado principal --}}
    <main class="main-content">
        <div class="content-left">
            <p class="paragraph-one">
                <strong>
                    Te ayudamos a <span class="highlight">gestionar y <br> desarrollar</span>
                    el conocimiento y el <br> personal de tu organización
                </strong>
            </p>
            <p class="paragraph-padding">
                Somos un software que transforma la gestión del <br> conocimiento en las organizaciones
            </p>
            <p class="paragraph-padding">
                Ofrecemos una plataforma intuitiva que empodera a <br> colegios, universidades y empresas
                con herramientas <br> avanzadas para la personalización, flexibilidad y <br> estandarización
                del aprendizaje.
            </p>
        </div>
        <div class="content-right">
            <img src="{{ asset('img/Imagen banner Principal.webp') }}" alt="Banner principal"> <!-- Imagen principal -->
        </div>
    </main>

    {{-- Apartado (Slider) --}}
    <section class="slider-container">
        <div class="slider">
            <div class="slide active">
                <div class="slide-content">
                    <p class="centered-text">
                        <strong>
                            Levely ofrece una amplia gama de funciones diseñadas para que las <br>
                            organizaciones se conviertan en los gestores del conocimiento.
                        </strong>
                    </p>
                    <div class="image-text-group">
                        <div class="image-left">
                            <img src="{{ asset('img/Imagenes Carrusel 1.webp') }}" alt="Imagen carrusel">
                        </div>
                        <div class="text-right">
                            <p><span class="highlight"><strong>Creación y gestión de <br> cursos personalizados</strong></span></p>
                            <p class="paragraph-two">Los profesores pueden crear cursos desde cero, adaptarlos <br>
                                a su estructura de enseñanza y hacer seguimiento a sus <br>
                                alumnos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <p class="centered-text">
                        <strong>
                            Levely ofrece una amplia gama de funciones diseñadas para que las <br>
                            organizaciones se conviertan en los gestores del conocimiento.
                        </strong>
                    </p>
                    <div class="image-text-group">
                        <div class="image-left">
                            <img src="{{ asset('img/Imagenes Carrusel 2.webp') }}" alt="Imagen carrusel">
                        </div>
                        <div class="text-right">
                            <p><span class="highlight"><strong>Creación y gestión de <br> cursos personalizados</strong></span></p>
                            <p class="paragraph-two">Los profesores pueden crear cursos desde cero, adaptarlos <br>
                                a su estructura de enseñanza y hacer seguimiento a sus <br>
                                alumnos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <p class="centered-text">
                        <strong>
                            Levely ofrece una amplia gama de funciones diseñadas para que las <br>
                            organizaciones se conviertan en los gestores del conocimiento.
                        </strong>
                    </p>
                    <div class="image-text-group">
                        <div class="image-left">
                            <img src="{{ asset('img/Imagenes Carrusel 1.webp') }}" alt="Imagen carrusel">
                        </div>
                        <div class="text-right">
                            <p><span class="highlight"><strong>Creación y gestión de <br> cursos personalizados</strong></span></p>
                            <p class="paragraph-two">Los profesores pueden crear cursos desde cero, adaptarlos <br>
                                a su estructura de enseñanza y hacer seguimiento a sus <br>
                                alumnos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-indicators">
            <span class="indicator active"></span> <!-- Indicadores del slider -->
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
    </section>

    {{-- lista de cards(4) --}}
    <section class="info-section">
        <p class="info-text">Levely ofrece soluciones completas para empresas e instituciones educativas que <br> desean gestionar programas de formación en línea eficientemente.</p>
        <div class="info-content">
            <div class="info-image">
                <img src="{{ asset('img/Vectores seccion soluciones.webp') }}" alt="Imagen informativa">
            </div>
            <div class="cards-container">
                <div class="card">
                    <img src="{{ asset('img/Imagenes seccion soluciones 4.webp') }}" alt="Imagen card 1">
                    <p class="card-title"><strong>Implementación <br> Personalizada</strong></p>
                    <hr class="rojo"> <!-- Línea horizontal roja -->
                    <p class="card-text">
                        Nuestros especialistas diseñan e <br> implementan soluciones adaptadas a <br> las necesidades específicas de cada <br> cliente.
                    </p>
                </div>

                <div class="card">
                    <img src="{{ asset('img/Imagenes seccion soluciones 4.webp') }}" alt="Imagen card 2">
                    <p class="card-title"><strong>Capacitación y Soporte <br> Continuo</strong></p>
                    <hr class="azul"> <!-- Línea horizontal azul -->
                    <p class="card-text">
                        Ofrecemos capacitación para <br> administradores y usuarios, además <br> de soporte técnico continuo para <br> una experiencia sin problemas.
                    </p>
                </div>

                <div class="card">
                    <img src="{{ asset('img/Imagenes seccion soluciones 4.webp') }}" alt="Imagen card 3">
                    <p class="card-title"><strong>Actualizaciones <br> Constantes</strong></p>
                    <hr class="verde"> <!-- Línea horizontal verde -->
                    <p class="card-text">
                        Mantenemos nuestra plataforma <br> actualizada con las últimas mejoras, <br> asegurando acceso a la tecnología <br> más avanzada.
                    </p>
                </div>

                <div class="card">
                    <div class="proximamente-badge">
                        <p class="card-text text-danger">Próximamente</p>
                    </div>
                    <img src="{{ asset('img/Imagenes seccion soluciones 4.webp') }}" alt="Imagen card 4">
                    <p class="card-title"><strong>Monetización y <br> Alcance</strong></p>
                    <hr class="amarillo"> <!-- Línea horizontal amarilla -->
                    <p class="card-text">
                        Permite a las empresas publicar y <br> monetizar sus cursos en nuestra <br> plataforma MOOC, ampliando su <br> alcance a otros usuarios y empresas.
                    </p>
                </div>
            </div>
        </div>
        <!-- Apartado de las 3 cards  -->
        <p class="extra-info-text">
            Con Levely, las empresas e instituciones educativas maximizan el aprendizaje en línea <br> para mejorar el desarrollo profesional y académico.
        </p>

        <p class="extra-info-highlight"><strong>Con Levely tus estudiantes <br> pueden:</strong></p>

        <div class="card extra-card1">
            <div class="gray-bg1">
                <img src="{{ asset('img/Iconos Carrusel beneficios 1.webp') }}" alt="Icono pequeño" class="small-icon1">
                <div class="card-content1">
                    <p class="parrafo-carta1"><strong>Actualizarse en el mundo laboral y/o <br> académico.</strong></p>
                    <p class="parrafo-cartas1">
                        Podrán aprender cómo superar esos primeros obstáculos para involucrarse en el mundo laboral, y prepararse mejor para sus primeros meses en la universidad.
                    </p>
                </div>
            </div>
        </div>

        <div class="card extra-card">
            <div class="gray-bg">
                <img src="{{ asset('img/Iconos Carrusel beneficios 2.webp') }}" alt="Icono pequeño" class="small-icon2">
                <div class="card-content">
                    <p class="parrafo-carta"><strong>Enfocarse en conocimientos específicos</strong></p>
                    <p class="parrafo-cartas">
                        Mediante nuestro sistema de seguimiento, tus estudiantes podrán medir <br> qué tanto han aprendido usando nuestros contenidos y nuestra tecnología.
                    </p>
                </div>
            </div>
        </div>

        <div class="card extra-card">
            <div class="gray-bg">
                <img src="{{ asset('img/Iconos Carrusel beneficios 3.webp') }}" alt="Icono pequeño" class="small-icon2"> <!-- Icono pequeño que va dentro de las cards -->
                <div class="card-content">
                    <p class="parrafo-carta"><strong>Enfocarse en conocimientos específicos</strong></p>
                    <p class="parrafo-cartas">
                        De la mano de los maestros, tus estudiantes podrán potenciar nuevas habilidades para su futuro profesional.
                    </p>
                </div>
            </div>
        </div>

        <div class="extra-image" >
            <img src="{{ asset('img/Imagenes Carrusel 2.webp') }}" alt="Imagen mediana"> <!-- Imagen derecha a las cards -->
        </div>

        <div class="extra-small-image">
            <img src="{{ asset('img/Vectores seccion Carrusel beneficios.webp') }}" alt="Imagen pequeña"> <!-- Imagen pequeña que va a la esquina de la otra -->
        </div>
    </section>

    {{-- Pie de página --}}
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo de la empresa"> <!-- Logo de accedo -->
            </div>
            <div class="footer-links">
                <a href="ruta/a/politicas"><strong>Políticas de privacidad</strong></a>
                <a href="ruta/a/terminos"><strong>Términos y condiciones</strong></a>
                <a href="ruta/a/contacto"><strong>Contáctanos</strong></a>
                <a href="ruta/a/region"><strong>Cambiar región</strong></a>
            </div>
            <div class="footer-social">
                <a href="https://twitter.com" target="_blank">
                    <i class="bi bi-twitter-x"></i> <!-- Icono de Twitter -->
                </a>
                <a href="https://facebook.com" target="_blank">
                    <i class="bi bi-facebook"></i> <!-- Icono de Facebook -->
                </a>
                <a href="https://youtube.com" target="_blank">
                    <i class="bi bi-youtube"></i> <!-- Icono de YouTube -->
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <i class="bi bi-linkedin"></i> <!-- Icono de LinkedIn -->
                </a>
            </div>
            <div class="footer-text">
                <p>Producto de Panthera © 2024</p> <!-- Texto del pie de página -->
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/slider.js') }}"></script> <!-- Archivo JavaScript para el slider -->
</body>
</html>
