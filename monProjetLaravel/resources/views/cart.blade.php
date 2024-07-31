@include('header')

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

@include('footer')
