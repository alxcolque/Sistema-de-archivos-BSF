<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Subir Archivo</h1>

        <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
            @csrf

            @include('files.fields')

            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
@endsection
