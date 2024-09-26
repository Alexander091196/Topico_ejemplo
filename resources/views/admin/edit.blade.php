@extends('admin.templates.template')

@section('title')
    Editar de vehículo
@endsection

@section('header')
    Editar de vehículo
@endsection

@section('body')
<form action="{{route('vehicles.update',$vehicle)}}" method="POST">
    @csrf 
    @method('put')
    <label for="name">Nombre: </label> <br>
    <input type="text" name="name" value="{{$vehicle->name}}"> <br>
    <label for="brand">Marca: </label> <br>
    <input type="text" name="brand" value="{{$vehicle->brand}}"> <br>
    <label for="model">Modelo: </label> <br>
    <input type="text" name="model" value="{{$vehicle->model}}"> <br>
    <label for="description">Descripción: </label> <br>
    <textarea name="description" cols="30" rows="10">{{$vehicle->description}}</textarea> <br>
    <button type="submit"> Actualizar</button>  <a href="{{ route('vehicles.show',$vehicle)}}">Retornar</a> 
   
</form>
@endsection
