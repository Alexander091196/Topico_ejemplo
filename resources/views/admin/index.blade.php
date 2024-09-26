

@extends('admin.templates.template')

@section('title')
Lista de Vehículos
@endsection

@section('header')
Lista de Vehículos
@endsection

@section('body')
<a href="{{ route('vehicles.create')}}">Nuevo Vehículo</a> 
<table>
    <thead>
        <tr>
            <tH>ID</tH>
            <th>NOMBRE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>DESCRIPCION</th>
            <th colspan="2"> Opciones</th>
            
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{$vehicle->id }}</td>
                <td>{{$vehicle->name}} </td>
                <td>{{$vehicle->brand}} </td>
                <td>{{$vehicle->model}} </td>
                <td>{{$vehicle->description}}</td>

                <td><a href="{{route ('vehicles.show',$vehicle)}}">Editar</a> </td>
                <td>
                    <form action="{{route ('vehicles.delete',$vehicle->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este vehículo?');">Eliminar</button>
                    </form> 
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table>    
@endsection
