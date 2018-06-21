@extends('templante/menufooter')
@section('body')
    <!--Comienso Header-->
    <div class="container-fluid header__principal">
        <div class="container">
            <div class="header d-flex align-items-center">
                <span class="">
                    <h1 class="header__titulo"><span class="text-white">ESCUELA PROFESIONAL DE</span><br> INGENIERÍA EN INFORÁTICA Y<br> SISTEMAS</h1>
                    <div class="header__pie backprimario"></div>
                    <p  class="header__subtitulo">FACULTAD DE INGENIERIA</p>
                    <a class="header__boton btn--activado" href="#">LEER MAS</a>
                </span>
            </div>
        </div>
    </div>
    <!--Fin del header-->
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
                            <a class="header__boton btn--desactivado" href="#">LEER MAS</a>
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
                </div>
            </div>
        </div>
    </div>
    <!--Fin del contenido-->
@endsection