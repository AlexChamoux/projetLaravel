<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Super Shoes</title>
</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between navbar-custom mb-5 ps-3 " >
        <div class="d-flex justify-content-between ms-5">
            <a class="navbar-brand" href="#"><img src="{{asset('images/image.png')}}" alt="mon" height="75"></a>


            <ul class="navbar-nav mr-auto mt-3 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle toto " href="product-list.blade.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chaussures
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sneakers</a></li>
                        <li><a class="dropdown-item" href="#">Chaussures de skate</a></li>
                        <li><a class="dropdown-item" href="#">Chaussures de montagne</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/') }}">Accueil</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/product') }}">Catalogue</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/product/1') }}">Détails du produit</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/cart') }}">Panier</a>
                </li>
            </ul>
        </div>
        <div class="me-5 ">
            <form class="d-flex mb-3 ml-auto p-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>



    </nav>

</header>

