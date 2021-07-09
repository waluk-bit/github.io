@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach ($mensajes as $dato)
            <div class="card mt-5">

                <div class="card-header">Mensaje de: {{$dato->nombre}} numero de mensaje: {{$dato->id}} fecha: {{$dato->created_at}}</div>
                <h5>Email:{{$dato->imail}}</h5>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{$dato->mensaje}}
                </div>
            </div>

        @endforeach
        </div>
    </div>
</div>
@endsection
