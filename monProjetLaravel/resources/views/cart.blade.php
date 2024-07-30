<?php

echo 'Panier';

//?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>
<body>
<h1>Panier</h1>
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
        <td>

            <!----><?php //= $value['name']; ?><!---->

        </td>
        <td> <img src="<?php //= $value['image']; ?><!---->" style="width: 10vw" alt="photo de <?php //= $value['name']; ?><!---->"></td>
        <td><?php //= formatPrice($value['price']); ?><!----></td>
        <td>
            <form action="panier.php" method="post">
                <input type="number" name="quantity" value="<?php //= $value['quantity']; ?><!---->" min="0">
                <input type="hidden" name="name" value="<?php //= $value['id']; ?><!---->">
                <input type="submit" name="update_quantity" value="Mettre à jour">
            </form>
        </td>
        <td><?php //= formatPrice(totalPrice($value['quantity'], $value['price'])); ?><!----></td>
        <td>
            <form action="panier.php" method="post">
                <input type="hidden" name="name" value="<?php //= $value['id']; ?><!---->">
                <input type="submit" name="delete_product" value="Supp">
            </form>
        </td>
    </tr>
        <?php
    //}
////    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total HT</td>
        <td>

            <!----><!----><?php ////= formatPrice($totalPriceExcludingVAT); ?><!---->

        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>TVA</td>
        <td><!----><?php ////= formatPrice($tva); ?><!----></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td><!----><?php ////= formatPrice($totalPrice); ?><!----></td>
    </tr>
    <tr>
        <td>
            <form action="panier.php" method="post">
                <label for="choix">Choix du transporteur *</label>
                <select id="choix" name="choix">
                    <option name="transporteur" value=""></option>
                    <option name="transporteur" value="UPS">UPS</option>
                    <option name="transporteur" value="MondialRelay">Mondial Relay</option>
                    <option name="transporteur" value="ChronoPOST">ChronoPOST</option>
                </select>
                <input type="submit" name="choixTransp" value="Choisir">
            </form>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td> * choix du transporteur obligatoire pour passer la commande</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Frais de port</td>
        <td><!----><?php ////if(isset($shipCost)){ echo formatPrice($shipCost); } ?><!----></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total :</td>
        <td><!----><?php ////if(isset($shipCost)){ echo formatPrice($totalPriceFdp); } ?><!----></td>
    </tr>
    <tr>
        <td>
            <form action="orders.php" method="post">
                <input type="hidden" name="totalPrice" value="<?php // if(isset($shipCost)){ echo $totalPriceFdp;} ?><!---->">

                <input type="hidden" name="quantity[]" value="<?php //echo htmlspecialchars($value['quantity'], ENT_QUOTES, 'UTF-8'); ?><!---->">
                <input type="hidden" name="idProduct[]" value="<?php //echo htmlspecialchars($value['id'], ENT_QUOTES, 'UTF-8'); ?><!---->">
                <input type="submit" value="Passer la commande">
            </form>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <form action="panier.php" method="post">
                <input type="hidden" name="name" value="<?php //if(isset($id)){ echo $id; } ?>">
                <input type="hidden" name="delete_cart" value="1">
                <a href="mutidimensional-catalog.php"><button type="submit">Vider le panier</button></a>
            </form>
        </td>
    </tr>
</table>

<a href="./index.php"><button>Retour à la page des produits</button></a>

</body>
</html>


