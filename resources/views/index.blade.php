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
                                <h1 class="header__titulo"><span class="text-white">ESCUELA PROFESIONAL DE</span><br> INGENIERÍA EN INFORMÁTICA Y<br> SISTEMAS</h1>
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
                        <div class="container noticias">
                            <h2 class="presentacion__title">Nuevas Noticias</h2>
                            <article class="noticias__item">
                                <div class="row">
                                    <figure class="col-lg-4">
                                        <img src="http://www.unjbg.edu.pe/img/2017-7/78451.JPG" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-8">
                                        <time class="item__fecha">23 noviembre 2018</time>
                                        <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                                        <p class="item__contenido">page when loking at its loyout, the point of using lorem ipsum is that it has a more-or-less normal distribution of etters, as opposed to using content here,content ...</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                                <div class="row">
                                    <figure class="col-lg-4">
                                        <img src="http://www.unjbg.edu.pe/img/2017-7/78451.JPG" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-8">
                                        <time class="item__fecha">23 noviembre 2018</time>
                                        <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                                        <p class="item__contenido">page when loking at its loyout, the point of using lorem ipsum is that it has a more-or-less normal distribution of etters, as opposed to using content here,content ...</p>
                                    </div>
                                </div>
                            </article>
                            <article class="noticias__item">
                               <div class="row">
                                    <figure class="col-lg-4">
                                        <img src="http://www.unjbg.edu.pe/img/2017-7/78451.JPG" alt="..." class="img-thumbnail">
                                    </figure>
                                    <div class="col-lg-8">
                                        <time class="item__fecha">23 noviembre 2018</time>
                                        <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                                        <p class="item__contenido">page when loking at its loyout, the point of using lorem ipsum is that it has a more-or-less normal distribution of etters, as opposed to using content here,content ...</p>
                                    </div>
                                </div>
                            </article>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                    <span class="page-link">Anterior</span>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">1</span>
                                        <span class="sr-only">(current)</span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--Fin de las noticias-->
                </div>
                <div class="col-lg-4 col-md-5">
                    <!--Comienso de eventos-->
                    <div class="container-fluid backsegundario">
                        <div class="container eventos backsegundario">
                            <h2 class="presentacion__title">Nuestros eventos</h2>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <a class="" href="#">LEER MAS ...</a>
                        </div>
                    </div>
                    <!--Fin de eventos-->
                     <!--Comienso de comunicados-->
                    <div class="container-fluid backsegundario">
                        <div class="container eventos backsegundario">
                            <h2 class="presentacion__title">Comunicados Importantes</h2>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h5 class="item__title--comunicado"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h5>
                            </article>
                            <article class="noticias__item">
                                <time class="item__fecha">23 noviembre 2018</time>
                                <h3 class="item__title--comunicado"><a class="text-dark" href="#">Long Established fact that a reader will be distracted by the readable</a></h3>
                            </article>
                            <div class="pt-5"></div>
                        </div>
                    </div>
                    <!--Fin de comunicados-->
                </div>
            </div>
        </div>
    </div>
    <!--Fin del contenido-->
@endsection