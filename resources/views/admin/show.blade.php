@extends('admin.templates.template')

@section('title')
    Vista de vehículo
@endsection

@section('header')
    Vista de vehículo
@endsection

@section('body')
    <ul>
        <li>Nombre: {{$vehicle->name}}</li>
        <li>Marca: {{$vehicle->brand}}</li>
        <li>Modelo: {{$vehicle->model}}</li>
        <li>Descripción: {{$vehicle->description}}</li>
        <li>Fecha de creación: {{$vehicle->create_at}}</li>
        <li>Fecha de actualización:  {{$vehicle->update_at}}</li>
    </ul>
    <a href="{{route('vehicles.edit',$vehicle)}}">Editar</a> <a href="{{ route('vehicles.index',$vehicle)}}">Retornar</a> 
@endsection
