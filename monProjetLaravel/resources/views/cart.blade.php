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
            <tr>
                <td>Nom du produit</td>
                <td><img src="{{ asset('images/dcshoes.jpg') }}" style="width: 10vw" alt="photo du produit"></td>
                <td>NN €</td>
                <td>
                    <input type="number" id="quantity-thumbnail" name="quantity" min="0">
                </td>
                <td>
                    NNN €
                </td>
                <td>

                </td>
            </tr>
        </table>

    </div>

</div>

@include('footer')
