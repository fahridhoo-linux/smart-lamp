@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Lampu</h2>

    <form action="{{ route('lamps.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Lampu</label>
            <input type="text" name="nama_lampu" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Menyala">Menyala</option>
                <option value="Mati">Mati</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Intensitas Cahaya</label>
            <input type="number" name="intensitas_cahaya" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('lamps.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection