<form action="panier.php" method="post" class="custom-thumbnail">
    <h3 class="mb-3">Nom du produit</h3>

    <input name="idProduct" type="hidden" value="" />
    <div class="row">
        <img src="" class="product-image mb-3" alt="Photo du produit">

        <div class="row">
            <p>
                <label for="quantity" class="mb-3">Quantité : </label>
                <input type="number" id="quantity" class="mb-3" name="quantity">
            </p>
        </div>
    </div>
    <p>Prix (TTC) : N €</p>

    <p><input type="submit" value="Ajouter au panier"></p>
</form>

