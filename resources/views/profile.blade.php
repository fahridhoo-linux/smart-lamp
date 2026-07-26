@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Profil Pengguna</h4>
    </div>

    <div class="card-body">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>ID User:</strong> {{ Auth::user()->id }}</p>
    </div>
</div>

@endsection