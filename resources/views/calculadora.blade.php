@extends('layouts.app')

@section('content')
<div class="container text-center">

<h5>Calculadora</h5>
@csrf
<form method="get" action="{{ route('calculadora.index')}}">
    <input type="text"  name="n1">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="n2">

    <input type="text" name="resultado" value="{{$resultado}}">

    <input type="submit">

</form>


@endsection