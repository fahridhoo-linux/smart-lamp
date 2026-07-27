@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')

<div class="profile-card">

    <div class="profile-header">
        <h3>👤 Profil Pengguna</h3>
    </div>

    <div class="profile-body">

        <div class="profile-item">
            <strong>Nama</strong>
            <span>{{ $user->name }}</span>
        </div>

        <div class="profile-item">
            <strong>Email</strong>
            <span>{{ $user->email }}</span>
        </div>

        <div class="profile-item">
            <strong>ID User</strong>
            <span>{{ $user->id }}</span>
        </div>

    </div>

</div>

@endsection