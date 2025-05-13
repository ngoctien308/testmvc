<div class='max-w-[700px] mx-auto'>
    <form action="index.php?controller=product&action=add" method="POST">
        <label>Product name</label>
        <input class='form-control' required name="name" />
        <label class='mt-2'>Product description</label>
        <textarea class='form-control' required name="description"></textarea>
        <button class='btn btn-primary mt-2'>Add a new product</button>
    </form>

    <div class='mt-4 gap-2 grid grid-cols-3'>
        <?php 
            foreach($products as $product) {
            echo '<div class="border p-2 rounded">
            <h1>'.$product['name'].'</h1>
            <p>'.$product['description'].'</p>
            <a href="./index.php?controller=product&action=show&productId='.$product['id'].'">
                <button class="btn btn-primary">View in detail</button>
            </a>
            <a href="./index.php?controller=product&action=delete&productId='.$product['id'].'">
                <button class="btn btn-danger">Delete</button>
            </a>
            </div>';
            }
        ?>
    </div>

</div>
