<?php 

echo '<div class="border m-2 p-2 rounded">
    <h1>'.$product['name'].'</h1>
    <p>'.$product['description'].'</p>
    <a href="./index.php?controller=product&action=index">
        <button class="btn btn-primary">View all the others</button>
    </a>
    </div>';