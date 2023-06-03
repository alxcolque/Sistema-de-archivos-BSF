<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Archivos</h1>
        <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Subir Archivo</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Archivo</th>
                    <th>URL de Archivo</th>
                    <th>Tipo de Archivo</th>
                    <th>Tamaño de Archivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                    <tr>
                        <td>{{ $file->id }}</td>
                        <td>{{ $file->filename }}</td>
                        <td>{{ $file->fileurl }}</td>
                        <td>{{ $file->filetype }}</td>
                        <td>{{ $file->filesize }}</td>
                        <td>
                            <a href="{{ route('files.show', $file->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('files.edit', $file->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('files.destroy', $file->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este archivo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
