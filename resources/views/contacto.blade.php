
@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
    
        <div class="col-12 ">
        
        <h3 class=" footer__contacto--titulo titulo">Contacto</h3>

        </div>

    </div>

    <div class="row">

        <div class="col-12 ">             
            <form class="footer__form" id="contactoForm" method="post" action="{{ route('EnvioDeMensaje.store')}}">
            @csrf
                <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tú Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tú correo electronico</label>
                        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                    
                <button onclick="document.getElementById('contactoForm').submit();" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>

    
    
</div>


@endsection

        