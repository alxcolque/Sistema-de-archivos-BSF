{{-- <div class="form-group">
    <input type="text" name="filename" id="filename" class="form-control @error('filename') is-invalid @enderror" value="{{ old('filename', $file->filename ?? '') }}" required>
    @error('filename')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> --}}
<div class="form-group">
    <label for="file">Archivo:</label>
    <input type="file" name="file" id="file" class="form-control-file @error('file') is-invalid @enderror">
    @error('file')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- <div class="form-group">
    <label for="fileurl">URL de Archivo:</label>
    <input type="text" name="fileurl" id="fileurl" class="form-control @error('fileurl') is-invalid @enderror" value="{{ old('fileurl', $file->fileurl ?? '') }}" required>
    @error('fileurl')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="filetype">Tipo de Archivo:</label>
    <input type="text" name="filetype" id="filetype" class="form-control @error('filetype') is-invalid @enderror" value="{{ old('filetype', $file->filetype ?? '') }}" required>
    @error('filetype')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="filesize">Tamaño de Archivo:</label>
    <input type="text" name="filesize" id="filesize" class="form-control @error('filesize') is-invalid @enderror" value="{{ old('filesize', $file->filesize ?? '') }}" required>
    @error('filesize')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="user_id">ID de Usuario:</label>
    <input type="number" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $file->user_id ?? '') }}" required>
    @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> --}}


