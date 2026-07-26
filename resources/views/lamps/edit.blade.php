@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Lampu</h2>

    <form action="{{ route('lamps.update', $lamp->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Lampu</label>
            <input type="text" name="nama_lampu" class="form-control"
                value="{{ $lamp->nama_lampu }}" required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control"
                value="{{ $lamp->lokasi }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Menyala" {{ $lamp->status == 'Menyala' ? 'selected' : '' }}>Menyala</option>
                <option value="Mati" {{ $lamp->status == 'Mati' ? 'selected' : '' }}>Mati</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Intensitas Cahaya</label>
            <input type="number" name="intensitas_cahaya" class="form-control"
                value="{{ $lamp->intensitas_cahaya }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('lamps.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection