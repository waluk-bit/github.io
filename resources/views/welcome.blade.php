@extends('layouts.footer')

@extends('layouts.app')

@section('content')
<!--  @if (session('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif -->

<header class="header">
    
    <div class="header__descripcion">
        
        <div class="header__textos">
            
            <h3 class="display-4">Lucas López</h3>
            <h4 class="lead">Desarrollador Web</h4>
            
        </div>
        
    </div>
    
</header>

<div class="container">
    
        <div class="col-12 p-0 contenedor__img">
            
            <img src="{{asset('img/yo.jpg')}}" class=" d-block container__my-picture" alt="...">
            
        </div>
    
        <div class="col-12 text-center pt-5 p-0 container__text h1">
            <p>Noticias</p>
        </div>
        
        <div class="main">

            <div class="main__title">
                <h5 class="main__title-text"><span class="main__title-text-span">ACTUALIDAD</span></h5>
            </div>

            <div class="main__content">

                <div class="main__section-news">

                    <div class="main__section-news">

                        <!-- Card 1 -->
                        <div class="main__section-news-card">
                            <img class="section__img" src="img/01.jpg" alt="">
                            <p class="main__section-text1">
                                <span>Balaya.</span> El creativo argentino que asesora a la NASA y busca terminar con la
                                grieta
                            </p>
                            <p class="main__section-text2">Por José Del Rio</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="main__section-news-card">
                            <img class="section__img" src="img/04.jpg" alt="">
                            <p class="main__section-text1">
                                <span>Se va del país.</span> Falabella se despide con dos subastas de más de 10.000
                                productos
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="main__section-news-card main__section-news-card-border">
                            <p class="main__section-text1 main__section-text1-card3 ">
                                De no creer: Ajústense los cinturones: tengo mucho para contar
                            </p>

                            <img class="section__img-yo" src="img/yo.jpg" alt="">

                            <p class="section__name">Carlos M. Reymundo Roberts</p>
                        </div>

                        <!-- Card 4 -->
                        <div class="main__section-news-card">

                                <img class="section__img " src="img/05.jpg" alt="">

                            <p class="main__section-text1">
                                <span>París lo inspira.</span> Schwartzman dio otro paso y llegó a octavos de Roland Garros
                            </p>
                        </div>

                        <!-- Card 5 -->
                        <div class="main__section-news-card">
                            <div class="card-5">
                                <img class="section__img" src="img/08.jpg" alt="">
                            </div>
                            <p class="main__section-text1">
                                <span>Desastre en Bakú.</span> El show de choques en la clasificación de F1 que ganó Leclerc
                            </p>
                        </div>

                        <!-- Card 6 -->
                        <div class="main__section-news-card">
                            <img class="section__img" src="img/06.jpg" alt="">
                            <p class="main__section-text1">
                                <span>"¡Soy un estúpido!".</span> Así es la curva más traicionera de la Fórmula 1
                            </p>
                            <p class="main__section-text2">Por Gastón Saiz</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
</div>
@endsection
