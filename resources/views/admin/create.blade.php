@extends('admin.templates.template')

@section('title')
    Nuevo Vehículo
@endsection

@section('header')
    Nuevo Vehículo
@endsection

@section('body')

    <form action="{{route('vehicles.store')}}" method="POST">
        @csrf 
        <label for="name">Nombre: </label> <br>
        <input type="text" name="name"> <br>
        <label for="brand">Marca: </label> <br>
        <input type="text" name="brand"> <br>
        <label for="model">Modelo: </label> <br>
        <input type="text" name="model"> <br>
        <label for="description">Descripción: </label> <br>
        <textarea name="description" cols="30" rows="10"></textarea> <br>
        <button type="submit"> Registrar</button> 
        <a href="{{ route('vehicles.index')}}">Regresar</a> 
    </form>
    
@endsection
