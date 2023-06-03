<!-- show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Archivo</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $file->filename }}</h5>
                <p class="card-text"><strong>URL de Archivo:</strong> {{ $file->fileurl }}</p>
                <p class="card-text"><strong>Tipo de Archivo:</strong> {{ $file->filetype }}</p>
                <p class="card-text"><strong>Tamaño de Archivo:</strong> {{ $file->filesize }}</p>
                <p class="card-text"><strong>ID de Usuario:</strong> {{ $file->user_id }}</p>
                <a href="{{ route('files.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection
