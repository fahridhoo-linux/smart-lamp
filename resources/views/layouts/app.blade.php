<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Smart Lamp</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
background:#f4f6f9;
}

.sidebar{
position:fixed;
left:0;
top:0;
width:250px;
height:100%;
background:#0d6efd;
padding-top:20px;
}

.sidebar h3{
color:white;
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:15px 20px;
text-decoration:none;
}

.sidebar a:hover{
background:#0b5ed7;
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
box-shadow:0 2px 8px rgba(0,0,0,.1);
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

<a href="{{ route('lamps.index') }}">
<i class="bi bi-lightbulb"></i>
Data Lampu
</a>

<a href="{{ route('energy.index') }}">
<i class="bi bi-lightning-charge"></i>
Penggunaan Listrik
</a>

<a href="{{ route('profile.edit') }}">
<i class="bi bi-person"></i>
Profil
</a>

<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-link text-white text-decoration-none">
<i class="bi bi-box-arrow-right"></i>
Logout
</button>
</form>

</div>

<div class="content">

<nav class="navbar p-3">

<div class="container-fluid">

<h4>Dashboard Smart Lamp</h4>

<span>
{{ Auth::user()->name }}
</span>

</div>

</nav>

<div class="container mt-4">

@yield('content')

</div>

</div>

</body>
</html>