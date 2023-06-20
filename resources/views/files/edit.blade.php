<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Archivo</h1>

        <form action="{{ route('files.update', $file->id) }}" method="POST" enctype="multipart/form-data" novalidate autocomplete="off">
            @csrf
            @method('PUT')

            @include('files.fields')

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
