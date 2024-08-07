<x-layout>
    <x-slot:title>Détail du produit</x-slot:title>
    <x-slot:content>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset($product->image) }}" class="d-block w-100" alt="image {{ $product->name }}">
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
                <h2 class="mb-3">{{ $product->name }}</h2>
                <h3 class="mb-3">{{ number_format($product->price / 100, 2) }} €</h3>
                <h4 class="mb-3 bg-danger discount">- {{ $product->discount }} % </h4>
                <h4 class="mb-3 stock">
                        @if($product->status == 1)
                            En stock
                        @elseif($product->status == 0)
                            Rupture de stock
                        @endif
                </h4>
                <form action="{{ url('/cart') }}" method="post">
                    <input type="number" name="quantity" id="quantity" class="mb-3">
                    <input type="submit" value="Ajouter au panier">
                </form>
            </div>
        </div>

    </div>

    <div>
        <p class="descript1Item">
            {{ $product->description }}
        </p>
    </div>





    <script>
        const myCarouselElement = document.querySelector('#myCarousel')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            touch: false
        })
    </script>

    </x-slot:content>

</x-layout>
