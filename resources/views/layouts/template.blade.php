<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Vivero el Sol </title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"><i class="ri-sun-line"></i> 
                    Vivero el Sol
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Inicio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Acerca de...</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Productos</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contacto</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/Banner Vivero del Sol.jpg" alt="Vivero del Sol - Banner" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            El arte en tu jardin...<br>
                        </h1>
                        <p class="home__description">
                            Sembramos. Cultivamos. Producimos nuestras plantas desde el origen.
                            <br> Cuando te llevas una de nuestras plantas a tu jardín,
                            te llevas una parte nuestra, de nuestro legado.
                        </p>
                        <a href="#about" class="button button--flex">
                            Conocenos <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/alegria.jpg" alt="Vivero del Sol - Alegria del hogar" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            La alegria del trabajo artesanal en el vivero...
                        </h2>

                        <p class="about__description">
                           Queremos brindar un servicio optimo, a cargo de nuestro personal
                           capacitado, quien atendera de manera amena y cordial, todas las dudas e inquietudes que el cliente nos presente.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Presupuestos sin cargos via mail o whatsapp. <br>
                                En menos de una hora tenes tu presupuesto.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Gran variedad. <br>Encontra todo lo que necesitas para tu jardin o proyecto.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Ponemos el acento en la atención y el servicio. <br>Todo nuestro esfuerzo esta centrado allí.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Reintegro total de dinero garantizada.
                            </p>
                        </div>

               
                    </div>
                </div>
            </section>

            <!--==================== Servicios ====================-->
            <section class="steps section container" id="products">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Nuestros Servicios...
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number"><img src="assets/img/paisajismo.webp" alt="Vivero del Sol - Paisajismo" class="product__image"/></div>
                            
                            <h3 class="steps__card-title">Paisajismo, parques y Jardines</h3>
                            <p class="steps__card-description">
                                Una Obra de Paisaje, debe mejorar la vida de quien lo habita...
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number"><img src="assets/img/podas.webp" alt="Vivero del Sol - Mantenimiento y podas" class="product__image"/></div>
                            <h3 class="steps__card-title">Mantenimientos y podas</h3>
                            <p class="steps__card-description">
                                Nuestro personal esta especializado en diversas tecnicas, de manejo de maquinaria, como de escalada.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number"><img src="assets/img/envio.webp" alt="Vivero del Sol - Envios a domicilio" class="product__image"/></div>
                            <h3 class="steps__card-title">Envio a domicilio</h3>
                            <p class="steps__card-description">
                            Contamos con transporte propio, para acercar nuestros productos a la comodidad de tu hogar.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTOS ====================-->
            
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                     Gran Variedad de<br>  Productos...
                </h2>

                <p class="product__description">
                Aquí hay algunas plantas seleccionadas de nuestra sala de exposición, todas están en excelente estado y tienen una larga vida útil. Compra y disfruta de la mejor calidad.
                </p>

                <div class="product__grid">
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/herramientasDeJardin.webp" alt="Vivero del Sol - Herramientas de Jardin" class="product__image"/><h3>ARTÍCULOS Y PRODUCTOS DE JARDÍN</h3></a>
                    </article>
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/herbaceas.webp" alt="Vivero del sol - Plantas Herbaceas" class="product__image"/><h3>HERBÁCEAS PERENNES</h3></a>
                    </article>                    
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/aromaticas.webp" alt="Vivero del Sol - Plantas aromaticas" class="product__image"/><h3>AROMÁTICAS</h3></a>
                    </article>                    
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/topiarios.webp" alt="Vivero del Sol - Plantas Topiarios" class="product__image"/><h3>TOPIARIOS</h3></a>
                    </article>                    
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/flores.webp" alt="Vivero del Sol - Flores" class="product__image"/><h3>FLORES (PLANTINES DE FLORES Y DE HUERTA)</h3></a>
                    </article>                    
                    <article class="product__card1">
                        <a href="#contact" class="product__title">
                            <img src="assets/img/forestales.webp" alt="Vivero del Sol - Forestales" class="product__image"/><h3>FORESTALES</h3></a>
                    </article> 
                </div>  
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Preguntas Frecuentes...
                </h2>

                <div class="questions__container container grid">
                     @yield('content')    
                
                      

                    </div>

                </div>
            </section>



            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                        Comuníquese con nosotros hoy, <br>a través de....
                        
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Whatsapp</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    +999 888 777
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Correo Electronico</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    user@email.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Correo Electronico</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Asunto</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Mensaje</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Enviar Mensaje
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                <a href="#" class="nav__logo"><i class="ri-sun-line"></i> 
                    Vivero el Sol
                </a>


                    <h3 class="footer__title">
                        Recibi nuestras novedades... 
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Ingresa tu correo" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribite.    
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Direccion.</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Argentina</li>
                        <li class="footer__information">Lomas Del Mirador - 43210</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contactanos.</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+123 456 789</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Medios de pago
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                      
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; 2022 CalderonDev. Todos los derechos reservados.</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>
 