<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Lamp Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            background:#f4f6f9;
        }

        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:#0d6efd;
            color:white;
        }

        .sidebar h3{
            text-align:center;
            padding:20px;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:15px 20px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.2);
        }

        .content{
            margin-left:250px;
        }

        .navbar{
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 3px 10px rgba(0,0,0,.1);
        }
    </style>
</head>

<body>

<div class="sidebar">

    <h3>💡 Smart Lamp</h3>

    <a href="{{ route('dashboard') }}">
        <i class="bi bi-speedometer2"></i>
        Dashboard
    </a>

    <a href="{{route('lamps.index')}}">
        <i class="bi bi-lightbulb"></i>
        Data Lampu
    </a>

    <a href="{{route('energy.index')}}">
        <i class="bi bi-lightning-charge"></i>
        Penggunaan Listrik
    </a> 

     <a href="{{route('sensor.index')}}">
        <i class="bi bi-lightning-charge"></i>
        Data sensor 
    </a>

    <a href="{{ route('profile.edit') }}">
        <i class="bi bi-person"></i>
        Profil
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-link text-white text-decoration-none w-100 text-start px-3 py-3">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </button>

    </form>

</div>

<div class="content">

<nav class="navbar navbar-expand-lg px-4">

    <div class="container-fluid">

        <h4 class="mb-0">
            Dashboard Smart Lamp
        </h4>

        <span>
            Halo,
            <b>{{ Auth::user()->name }}</b>
        </span>

    </div>

</nav>

<div class="container-fluid mt-4">

    @yield('content')

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>