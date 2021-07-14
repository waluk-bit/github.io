@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row align-text-center">
        <div class="col mt-3 d-inline-flex justify-content-center">
            <h5>Lista de Compras</h5>
        </div>
    </div>

    <div class="row mt-3 align-items-center align-content-center">
        <div class="col-8 col-8-p">
            <input type="text" class="form-control" placeholder="Producto que desea agregar" aria-label="First name">
        </div>
        <div class="col-4 d-inline-flex justify-content-center">
            <button type="button" class=" btn-primary button-agregar">Agregar a la lista</button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col d-flex justify-content-center text-center">
            <p class=" h5 mt-5">Mi lista  (Vamos! :D)</p>
        </div>
        <div class="col-12 mt-2 mb-3">
            <div class="text-list"></div>
        </div>

        <div class="col d-inline-flex justify-content-center">
            <button type="button" class=" btn-primary button-agregar">Guardar lista</button>
        </div>
    </div>

</div>

<script>

</script>

@endsection