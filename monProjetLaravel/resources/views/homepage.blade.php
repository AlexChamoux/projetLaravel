
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>mon site</title>
</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between navbar-custom  toto mb-5 ps-3 ">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="{{asset('images/image.png')}}" alt="mon" height="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav mr-auto mt-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="product-list.blade.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chaussures
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sneakers</a></li>
                            <li><a class="dropdown-item" href="#">Chaussures de skate</a></li>
                            <li><a class="dropdown-item" href="#">Chaussures de montagne</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Panier</a>
                    </li>
            </ul>
        </div>
        <div>
                        <form class="d-flex mb-3 ml-auto p-2" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
        </div>



    </nav>

</header>
<main role="main" class="container">
    <img src="{{asset('images/image.png')}}" alt="mon">

</main>
<footer class="footer">
    <div class="container ">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
        </footer>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
