@extends('layouts.master')

@section('content')

Vista detalle producto {{ $id }}

<div class="row">

    <div class="col-sm-4">
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
        {{-- TODO: Imagen genérica de los productos --}}

    </div>
    <div class="col-sm-8">
        <p>Nombre: {{ $producto[0] }}</p>
        <p>Categoría: {{ $producto[1] }}</p>

    </div>
</div>
@stop
