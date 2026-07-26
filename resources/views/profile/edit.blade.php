@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Profil Saya</h3>
    </div>

    <div class="card-body">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>

        <hr>

        <h5>Edit Profil</h5>

        @include('profile.partials.update-profile-information-form')

        <hr>

        <h5>Ubah Password</h5>

        @include('profile.partials.update-password-form')

        <hr>

        <h5>Hapus Akun</h5>

        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection