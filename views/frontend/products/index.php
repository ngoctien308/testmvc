<?php 

foreach($products as $product) {
    echo '<div style="border: 1px solid black; max-width: 500px; margin-bottom: 8px">
    <h1>'.$product['name'].'</h1>
    <p>'.$product['description'].'</p>
    </div>';
}

?>

