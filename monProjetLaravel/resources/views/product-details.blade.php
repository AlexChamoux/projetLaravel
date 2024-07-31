@include('header')



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/dcshoes.jpg') }}" class="d-block w-100" alt="image DCSHoes 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/dcshoes_2.jpg') }}" class="d-block w-100" alt="image DCSHoes 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/dcshoes_3.jpg') }}" class="d-block w-100" alt="image DCSHoes 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/dcshoes_4.jpg') }}" class="d-block w-100" alt="image DCSHoes 4">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/dcshoes_5.jpg') }}" class="d-block w-100" alt="image DCSHoes 5">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/dcshoes_6.jpg') }}" class="d-block w-100" alt="image DCSHoes 6">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <h2 class="mb-3">Nom du Produit</h2>
            <h3 class="mb-3">Prix du Produit (TTC)</h3>
            <h4 class="mb-3 bg-danger discount">- N% </h4>
            <h4 class="mb-3 stock">En stock</h4>
            <form action="{{ url('/cart') }}" method="post">
                <input type="number" name="quantity" id="quantity" class="mb-3">
                <input type="submit" value="Ajouter au panier">
            </form>
        </div>
    </div>

</div>

<div>
    <p class="descript1Item">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolores facilis magni optio quas quod sint sunt? Ab, ad asperiores consequuntur eveniet fugit itaque iure necessitatibus numquam, quae, quibusdam quis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum ex excepturi harum quibusdam quisquam veritatis? Architecto atque aut eligendi, ex fuga, hic incidunt natus nihil recusandae reiciendis sed suscipit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab at atque, deserunt dicta, dolorem eaque error esse excepturi maxime modi obcaecati omnis optio pariatur, ratione saepe sit tenetur totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolores facilis magni optio quas quod sint sunt? Ab, ad asperiores consequuntur eveniet fugit itaque iure necessitatibus numquam, quae, quibusdam quis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum ex excepturi harum quibusdam quisquam veritatis? Architecto atque aut eligendi, ex fuga, hic incidunt natus nihil recusandae reiciendis sed suscipit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab at atque, deserunt dicta, dolorem eaque error esse excepturi maxime modi obcaecati omnis optio pariatur, ratione saepe sit tenetur totam.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolores facilis magni optio quas quod sint sunt? Ab, ad asperiores consequuntur eveniet fugit itaque iure necessitatibus numquam, quae, quibusdam quis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum ex excepturi harum quibusdam quisquam veritatis? Architecto atque aut eligendi, ex fuga, hic incidunt natus nihil recusandae reiciendis sed suscipit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab at atque, deserunt dicta, dolorem eaque error esse excepturi maxime modi obcaecati omnis optio pariatur, ratione saepe sit tenetur totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolores facilis magni optio quas quod sint sunt? Ab, ad asperiores consequuntur eveniet fugit itaque iure necessitatibus numquam, quae, quibusdam quis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum ex excepturi harum quibusdam quisquam veritatis? Architecto atque aut eligendi, ex fuga, hic incidunt natus nihil recusandae reiciendis sed suscipit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab at atque, deserunt dicta, dolorem eaque error esse excepturi maxime modi obcaecati omnis optio pariatur, ratione saepe sit tenetur totam.
    </p>
</div>





<script>
    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
    })
</script>

@include('footer')
