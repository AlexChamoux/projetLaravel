<x-layout>
    <x-slot:title>Test Requête Model</x-slot:title>
    <x-slot:content>
        <h1>Produits par Catégories</h1>

        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <h1>{{ $category->name_category }}</h1>

                    @foreach ($category->products as $product)
                        <div class="col-md-4 mb-4">
                            @include('thumbnail')
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </x-slot:content>

</x-layout>