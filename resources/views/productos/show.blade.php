@extends('layouts.master')

@section('content')

Vista detalle producto {{ $producto->id }}

<div class="row">

    <div class="col-sm-4">
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
        {{-- TODO: Imagen genérica de los productos --}}

    </div>
    <div class="col-sm-8">
        <p><b>Nombre:</b> {{ $producto->nombre }}</p>
        <p><b>Categoría:</b> {{ $producto->categoria }}</p>
        @if($producto->pendiente)
            <a class="btn btn-danger" href="#">Comprar producto</a>
        @else
            <a class="btn btn-primary" href="#">Comprado</a>
        @endif

        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar Producto</a>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>
    </div>
</div>
@stop
