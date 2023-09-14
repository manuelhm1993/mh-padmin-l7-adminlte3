{{-- Sustituir el layout.app por el layout de adminlte --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

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
    <script> console.log('Hi!'); </script>
@stop
