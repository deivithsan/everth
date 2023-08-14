@include('layouts.principal')

<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/principal/2.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <h3>FOR.EVERTH</h3>

            <h1>
                Pagina en <br>
                proceso de <br>
                desarrollo.
            </h1>


            <div class="home-content__buttons">
               <a href="#contact" class="smoothscroll btn btn--stroke">
                   Contactanos
               </a>
               <a href="#" class="smoothscroll btn btn--stroke">
                  <i class="fa fa-download"></i> Formulario
               </a>
           </div>

        </div>

        <div class="home-content__scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <span>Bajar</span>
            </a>
        </div>

        <div class="home-content__line"></div>

    </div> <!-- end home-content -->


    <ul class="home-social">
        <li>
            <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
        </li>
        <li>
            <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
        </li>
    </ul>
    <!-- end home-social -->

</section> <!-- end s-home -->


<!-- about
================================================== -->
<section id='about' class="s-about">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead subhead--dark">Hola a todos</h3>
            <h1 class="display-1 display-1--light">FOR.EVERTH</h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row about-desc" data-aos="fade-up">
        <div class="col-full">
            <p>
                Pagina en proceso de desarrollo, las imagenes, el diseño y la información puede ser cambiada en cualquier momento.
            </p>
        </div>
    </div> <!-- end about-desc -->

    <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

        <div class="col-block stats__col ">
            <div class="stats__count">127</div>
            <h5>Barrio 1</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">1505</div>
            <h5>Barrio 2</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">109</div>
            <h5>Barrio 3</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">102</div>
            <h5>Barrio 4</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">102</div>
            <h5>Barrio 5</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">102</div>
            <h5>Barrio 6</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">102</div>
            <h5>Barrio 7</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">1002</div>
            <h5>Barrio 8</h5>
        </div>

    </div> <!-- end about-stats -->

    <div class="about__line"></div>

</section> <!-- end s-about -->


<!-- services
================================================== -->
<section id='MAPPA' class="s-services" style="background-image: url('images/principal/mappa_l.png');">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <div class="subhead">
                <img src="{{ asset('images/principal/logo_mappa.png') }}">
            </div>
            <h1 class="display-2">MOVIMIENTO AMPLIO POR EL PROGRESO DEL ARCHIPIÉLAGO</h1>
        </div>
    </div>
    <div class="row services-list block-1-2 block-tab-full">
        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <img src="{{ asset('images/principal/mappa_1.png') }}" style="height: 100%; width: 100%">
            </div>
        </div>
        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <img src="{{ asset('images/principal/mappa_2.png') }}" style="height: 100%; width: 100%">
            </div>
        </div>
    </div>
</section>

<section id='works' class="s-works">
    <div class="intro-wrap">
        <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Galeria</h3>
                <h1 class="display-2 display-2--light">En esta sección encontraran las fotos mas recientes</h1>
            </div>
        </div>
    </div>
    <div class="row works-content">
        <div class="col-full masonry-wrap">
            <div class="masonry">
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/1.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/1.jpg') }}" srcset="{{ asset('images/principal/1.jpg') }} 1x, {{ asset('images/principal/1.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                                for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for everth.</p>
                        </div>
                    </div>
                </div>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/3.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/3.jpg') }}" srcset="{{ asset('images/principal/3.jpg') }} 1x, {{ asset('images/principal/3.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                                for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for.everth</p>
                        </div>
                    </div>
                </div>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/4.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/4.jpg') }}"
                                     srcset="{{ asset('images/principal/4.jpg') }} 1x, {{ asset('images/principal/4.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                               for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for.everth.</p>
                        </div>
                    </div>
                </div>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/5.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/5.jpg') }}"
                                     srcset="{{ asset('images/principal/5.jpg') }} 1x, {{ asset('images/principal/5.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                                for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for.everth.</p>
                        </div>
                    </div>
                </div>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/10.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/10.jpg') }}"
                                     srcset="{{ asset('images/principal/10.jpg') }} 1x, {{ asset('images/principal/10.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                                for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for.everth.</p>
                        </div>
                    </div>
                </div>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ asset('images/principal/12.jpg') }}" class="thumb-link" data-size="1050x700">
                                <img src="{{ asset('images/principal/12.jpg') }}"
                                     srcset="{{ asset('images/principal/12.jpg') }} 1x, {{ asset('images/principal/12.jpg') }}@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                for.everth
                            </h3>
                            <p class="item-folio__cat">
                                for.everth
                            </p>
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>
                        <div class="item-folio__caption">
                            <p>for.everth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end works-content -->

</section> <!-- end s-works -->

<!-- contact
================================================== -->
<section id="contact" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Contactame</h3>
        </div>
    </div>

    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <h3 class="h6">Envia un mensaje</h3>

            <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Su Nombre" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Su Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Tema" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Mensaje" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Enviar</button>
                        <div class="submit-loader">
                            <div class="text-loader">Enviando...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form>

            <!-- contact-warning -->
            <div class="message-warning">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class="message-success">
                Your message was sent, thank you!<br>
            </div>

        </div> <!-- end contact-primary -->

        <div class="contact-secondary">
            <div class="contact-info">

                <h3 class="h6 hide-on-fullwidth">Infoamción de Contacto</h3>

                <div class="cinfo">
                    <h5>Donde me encuentro</h5>
                    <p>
                        1600<br>
                        San Andres, COL<br>
                        94043
                    </p>
                </div>

                <div class="cinfo">
                    <h5>Contactame a estos correos</h5>
                    <p>
                        contact@gmail.com<br>
                        info@gmail.com
                    </p>
                </div>

                <div class="cinfo">
                    <h5>Número de telefono</h5>
                    <p>
                        Phone: (+63) 555 1212<br>
                        Mobile: (+63) 555 0100<br>
                        Fax: (+63) 555 0101
                    </p>
                </div>

                <ul class="contact-social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section> <!-- end s-contact -->


<!-- footer
================================================== -->
<footer>


    <div class="row footer-bottom">

        <div class="col-twelve">
            <a href="http://altaespecialidad.co/"><img style="padding: 10px 0;" src="{{ asset('images/principal/logo4.png') }}" width="100"/></a>
            <div class="copyright">
                <span><p>© 2019 Copyright Derechos Reservados <a href="http://altaespecialidad.co/"> Alta Especialidad SAS</a></p></span>
            </div>
            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
            </div>
        </div>

    </div> <!-- end footer-bottom -->

</footer> <!-- end footer -->



<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                "Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
            "Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
        <div class="line-scale-pulse-out">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
