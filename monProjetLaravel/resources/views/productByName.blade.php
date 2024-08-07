<x-layout>
    <x-slot:title>Produits triés par Nom</x-slot:title>
    <x-slot:content>
        <div class="container">
            <div class="row">
                <a href="{{ url('/products/price') }}">Trier par prix</a>
                <a href="{{ url('/product/') }}">Catalogue de Base</a>
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">

                        <a href="{{ url('/product/' . $product->id) }}" class="textDecoration">
                            @include('thumbnail')
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </x-slot:content>
</x-layout>