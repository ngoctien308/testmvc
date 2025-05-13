<?php 

foreach($products as $product) {
    echo '<div class="border m-2 p-2 rounded">
    <h1>'.$product['name'].'</h1>
    <p>'.$product['description'].'</p>
    <a href="./index.php?controller=product&action=show&productId='.$product['id'].'">
        <button class="btn btn-primary">View in detail</button>
    </a>
    </div>';
}

?>