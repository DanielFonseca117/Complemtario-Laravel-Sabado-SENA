@extends('app')
@section('title', 'Sistema - Categorias')

@push('css')
    <link rel="stylesheet" href="{{asset('css/mantenimiento.css')}}">
@endpush

@section('contenido')
    <h1>Categorias</h1>
    <p>Este es el contenido de la página de categorias</p>
@endsection

@push('scripts')
    <script src="{{asset('js/mantenimiento.js')}}"></script>
@endpush