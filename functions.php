<?php

/*************************  creation de console ****************************/
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('" . $output . "' );</script>";
}
debug_to_console("Console test");


/*************************  creation des produits ****************************/


function createProduit($src,$mar,$details,$prix,$id){
    $produit=
   " <div class=\"product\">
    <form  method=\"post\">
                <img src=\"$src\" alt=\"adidas-cht\">
                <div class=\"des\">
                    <span>$mar</span>
                    <h5>$details</h5>
                    <h4>$prix</h4>
                    <button type=\"submit\" name=\"ajouteraupanier\" class=\"ajouteraupanier\"><i class=\"fa-solid fa-cart-plus\"></i></button>
                    <input type=\"text\" name=\"produit_id\" value=\"$id\">
                </div>
                </form>
            </div>
        ";
    echo $produit;
}

?>
