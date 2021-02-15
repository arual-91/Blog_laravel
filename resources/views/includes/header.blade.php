<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2 Laravel</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            margin: 0;
        }
        .navbar-dark .navbar-nav .nav-link.active {
            background-color: white;
            color: rgb(90, 170, 226);
            border-radius: 5px;
        }
        
           
        footer {
            background-color: rgb(0, 45, 52);
            color: white;
        
        }
        
        nav {
            background-color: rgb(0, 45, 52);
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color: white;
      
        }
        
        #head {
            background-color: rgb(60, 65, 72);
            background-position: center;
            height:  170px;
        
        }


    </style>
</head>
<body class="d-flex flex-column min-vh-100">
   <!-- NAVEGADOR -->
<nav class="navbar navbar-expand-md fixed-top navbar-dark font-weight-bold">
    <div class="container-fluid">
            <ul class="nav navbar-nav ">
                @foreach ($navs as $menu)
                    <li class="nav-item ">
                        <a class="nav-link pl-3 pr-3" href="http://localhost:8000/{{ strtolower(trim($menu)) }}">{{ $menu }}</a>
                    </li> 
                @endforeach
            </ul> 
                @guest
                    <a class="pl-3 pr-3 btn text-secondary font-weight-bold" href="http://localhost:8000/login" class="pull-left">Login</a> 
                    @else 
                    <a class="pl-3 pr-3 btn text-secondary font-weight-bold" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                @endguest
                       
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
           
                           
          
    </div>
</nav>
    <!--  CABECERA -->
<section >
    <div class="containe" id="head">
        <div class=" text-center pt-5 mt-3 text-white">
            <h1>{{strtoupper ($cabecera)}}</h1>
            <h2>{{$autor}}</h2>
        </div>
    </div>
</section>
