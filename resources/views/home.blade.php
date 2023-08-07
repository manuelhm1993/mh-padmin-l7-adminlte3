{{-- Sustituir el layout.app por el layout de adminlte --}}
@extends('adminlte::page')

@section('title', 'MHenriquez')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>

        <div class="card-body">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat odit debitis aliquid nemo, voluptas ipsam ea praesentium pariatur nostrum accusamus voluptates fuga. Minus culpa, provident consequatur laudantium fuga sapiente exercitationem.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop