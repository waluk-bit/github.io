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
    <div class="container mb-5">

        <div class="row">

            <div class="col-12">
                <div class="container__img">
                    <img src="{{asset('img/yo.jpg')}}" class=" mx-auto d-block container__my-picture" alt="...">
                </div>
            </div>
            
            <div class="col text-center pt-5 container__text h1">
                <p>Acerca de mi</p>
            </div>

        </div>

        <div class="row">
        
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a class="btn btn-danger" href="contacto">Contacto</a> 
                    <a class="btn btn-primary" href="trabajos">Trabajos</a> 
                </div>
            
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/3.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/3.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    
    </div>
  
@endsection


