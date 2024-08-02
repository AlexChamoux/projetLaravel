<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between navbar-custom mb-5 ps-3 " >
        <div class="d-flex justify-content-between ms-5">
            <a class="navbar-brand" href="#"><img src="{{asset('images/image.png')}}" alt="mon" height="75"></a>


            <ul class="navbar-nav mr-auto mt-3 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle toto " href="../product-list.blade.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

{{$content}}

<footer>
    <div >
        <footer class="py-5 ps-4">
            <div class="row">
                <div class="col-2">
                    <h5>Sneakers</h5>

                </div>

                <div class="col-2">
                    <h5>Chaussures de Skate</h5>

                </div>

                <div class="col-2">
                    <h5>Chaussure de Montagne</h5>

                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h5>Inscrivez-vous à notre newsletter</h5>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Addresse mail</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Addresse mail">
                            <button class="btn btn-primary" type="button">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p class="text">CGV</p>
                <p class="text"> Mentions légales</p>
                <p class="text">Protection des données</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>