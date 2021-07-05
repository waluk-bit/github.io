@extends('layouts.footer')

@extends('layouts.app')

@section('content')


<div class="container mb-5">

    <div class="row">
    
        <div class="col-12 ">
        
        <h3 class=" footer__contacto--titulo titulo mt-5">Contáctame</h3>

        </div>

    </div>

    <div class="row form__block">
        
        <div class="col-12">             
            <form class="footer__form" id="contactoForm" method="post" action="{{ route('EnvioDeMensaje.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label mt-4">Tú Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tú correo electronico</label>
                    <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartiré su correo electrónico con nadie más.</div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje </label>
                    <textarea  name="mensaje" style="max-height: 100px; min-height: 100px;" class="form-control control__textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div id="emailHelp" class="form-text">Anímate deja un mensaje.</div>   
                </div> 
                
                <button onclick="document.getElementById('contactoForm').submit();" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        
        
    </div>
    
</div>

@endsection




