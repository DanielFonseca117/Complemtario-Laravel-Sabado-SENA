@extends('app')
@section('title', 'Sistema' - Categorias)

@push('css')
    <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/categoria.js') }}"></script>
@endpush

@section('contenido')
    <h1>Categorias</h1>
@endsection