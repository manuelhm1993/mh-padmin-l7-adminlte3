{{-- Sustituir el layout.app por el layout de adminlte --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

{{-- Activar el plugin sweetalert2 en esta vista --}}
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    @for ($i = 0; $i < 10; $i++)
        @include('includes.admin.card')
    @endfor
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hola mundo');
    </script>
@stop
