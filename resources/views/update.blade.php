@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">   
        @foreach ($calculo as $dato)
        <form method="POST" action="{{ route('operaciones.update', $dato->id)}}">
        @method ('put')
        @csrf

            <input type="text" value="{{$dato->n1}}" name="n1">
            <select value="{{$dato->op}}" name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input value="{{$dato->n2}}" type="text"  name="n2">        

            <input type="submit">

        </form>


        @endforeach
        </div>
    </div>
</div>
@endsection
