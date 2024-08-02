<x-layout>
    <x-slot:title>Panier</x-slot:title>

    <x-slot:content>
        <div class="container">
            <div class="border-cart">
                <table>
                    <tr>
                        <th>Produit</th>
                        <th></th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
        {{--            @foreach($_SESSION['cart'] as $value)--}}
                            @include('partial-cart')
        {{--            @endforeach--}}
                </table>

            </div>

        </div>

    </x-slot:content>

</x-layout>
