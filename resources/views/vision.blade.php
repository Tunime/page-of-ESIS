@extends('templante/menufooter')
@section('body')
     <!--inicio del carrusel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active header__principal" style="height: 70vh;">
                    <div class="seccion carousel-caption ">
                       <div class="header d-flex align-items-center">
                            <span class="text-left">
                                <h1 class="header__titulo"><span class="text-white">ESCUELA PROFESIONAL DE</span><br> INGENIERÍA EN INFORÁTICA Y<br> SISTEMAS</h1>
                                <div class="header__pie backprimario"></div>
                                <p  class="header__subtitulo">FACULTAD DE INGENIERIA</p>
                                <a class="header__boton btn--activado" href="#">LEER MAS</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item header__segundario" style="height: 70vh;">
                    <div class="seccion carousel-caption ">
                       <div class="header d-flex align-items-center">
                            <span class="text-left">
                                <h1 class="header__titulo"><span class="text-white">DISFRUTA DEL EVENTO<br> DE EGRESADOS<br>POSMASTER</span></h1>
                                <div class="header__pie backprimario"></div>
                                <p  class="header__subtitulo">FACULTAD DE INGENIERIA</p>
                                <a class="header__boton btn--activado" href="#">LEER MAS</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!--Fin del carusel-->
    <!--Comienso del contenido-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <!--Comiensa las noticias-->
                    <div class="container-fluid">
                        <div id="vision" class="container noticias ">
                            <h2 class="presentacion__title ">Vision</h2>
                            <article class="noticias__item ">
                               <p>Ser una Escuela Académico Profesional acreditada, según estándares nacionales e internacionales, basada en una enseñanza de calidad, innovadora y flexible, que forma Ingenieros en Informática y Sistemas generadores de empresas, proactivos, agentes de cambio, con profundo sentido humanista, con un alto nivel de investigación científica e innovación tecnológica, con dominio de las tecnologías de la Información y de las Telecomunicaciones, comprometidos con el desarrollo de la región y el País, bajo los principios éticos y morales</p>
                            </article>
                        </div>
                         <div id="mision" class="container noticias">
                            <h2 class="presentacion__title">Mision</h2>
                            <article class="noticias__item">
                               <p>Somos Formadores de profesionales con visión holística, científica y humanista en Ciencias Naturales, Formales, Sociales, Ciencias de la Computación, Informática y Sistemas, Electrónica, Investigación y Educación, que planteen soluciones integrales de carácter multidisciplinario y transdisciplinario, con el compromiso de contribuir al desarrollo económico,  social y político de la Región y el País.</p>
                            </article>
                        </div>
                         <div id="objetivo" class="container noticias">
                            <h2 class="presentacion__title">Objetivo Especifico</h2>
                            <article class="noticias__item">
                               <p>Formar Profesionales en Ingeniería Informática y Sistemas con carácter multidisciplinario e interdisciplinar  por competencias, que aporten con sus conocimientos al desarrollo del país a través de las organizaciones productivas  y de servicios, adaptándose permanentemente a su entorno laboral, propendiendo a los cambios obligados por la evolución tecnológica y científica, con nivel académico de calidad internacional dentro de los ejes temáticos y formación profesional en el área de: Ciencias Básicas y Humanidades, Gestión Empresarial, Sistemas, Computación, Informática, investigación y docencia universitaria.</p>
                            </article>
                        </div>
                         <div id="historia" class="container noticias">
                            <h2 class="presentacion__title">Historia</h2>
                            <article class="noticias__item">
                            <img src="http://www.unjbg.edu.pe/img/2017-7/78451.JPG" class="img-fluid" alt="Responsive image">
                               <p class="mt-4">La Escuela Profesional de Ingeniería en Informática y Sistemas, nació en la Facultad de Ciencias un 23 de febrero de 1990, con resolución Rectoral N° 2091-A-90-UN/JBG y entra en funcionamiento un 20 de febrero de 1991.
                                    Según resolución RAU 128-2010. AU COG, se realiza la fusión de las Facultades conformándose siete facultades, y la Escuela Profesional de Ingeniería en Informática y Sistemas pasa a formar la Facultad de Ingeniería conjuntamente con las escuelas de Ingeniería de Minas, Ingeniería Metalúrgica, Ingeniería Mecánica e Ingeniería Química. 
                                    <br>
                                    <br>
                                    La primera promoción de la Escuela Profesional de Ingeniería en Informática y Sistemas ha egresado en el año 1996; hasta la fecha han egresado 20 promociones haciendo un total de 487 egresados que se desempeñan exitosamente en las distintas organizaciones empresariales y no empresariales del Sector público y privado de la ciudad y del país. 
                                    <br>
                                    <br>
                                    Asimismo, la Escuela Profesional de Ingeniería en Informática y Sistemas, al momento cuenta con 288 estudiantes en los diez ciclos académicos de estudios, cuenta con una plana docente de 12 docentes entre nombrados y contratados y 02 personal administrativo.</p>
                            </article>
                        </div>
                    </div>
                    <!--Fin de las noticias-->
                </div>
                <div class="col-lg-4 col-md-5">
                    <!--Comienso de eventos-->
                    <div class="container-fluid backsegundario pb-3">
                        <div class="container eventos backsegundario">
                            <h2 class="presentacion__title">Enlases Útiles</h2>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#vision">Vision</a>
                                </li>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#mision">Mision</a>
                                </li>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#objetivo">Objetivos</a>
                                </li>
                                <li  class="menulateral d-flex align-items-center">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <a class=" menulateral__item" href="#historia">Historia</a>
                                </li>
                           
                        </div>
                    </div>
                    <!--Fin de eventos-->
                </div>
            </div>
        </div>
    </div>
    <!--Fin del contenido-->
@endsection