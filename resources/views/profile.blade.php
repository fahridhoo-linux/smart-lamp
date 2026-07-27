@extends('layouts.app')

@section('content')

<style>
    body{
        background: #f4f6f9;
    }

    .profile-card{
        max-width: 650px;
        margin: 40px auto;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .profile-header{
        background: linear-gradient(135deg, #0d6efd, #4e73df);
        color: white;
        text-align: center;
        padding: 25px;
    }

    .profile-header h3{
        margin: 0;
        font-weight: bold;
    }

    .profile-body{
        padding: 30px;
    }

    .profile-item{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }

    .profile-item:last-child{
        border-bottom: none;
    }

    .profile-label{
        font-weight: 600;
        color: #555;
    }

    .profile-value{
        color: #333;
    }
</style>

<div class="profile-card">

    <div class="profile-header">
        <h3>👤 Profil Pengguna</h3>
    </div>

    <div class="profile-body">

        <div class="profile-item">
            <span class="profile-label">Nama</span>
            <span class="profile-value">{{ Auth::user()->name }}</span>
        </div>

        <div class="profile-item">
            <span class="profile-label">Email</span>
            <span class="profile-value">{{ Auth::user()->email }}</span>
        </div>

        <div class="profile-item">
            <span class="profile-label">ID User</span>
            <span class="profile-value">{{ Auth::user()->id }}</span>
        </div>

    </div>

</div>

@endsection