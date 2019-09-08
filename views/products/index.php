
<?php

/**
 * @var \app\models\Product[] $products
 * @var \app\models\Product $title
 */
?>
<h2><?=$title?></h2>
<h3><a href="/category/index">Category</a></h3>
        <?php foreach ($products as $product ):?>
            <div class="col-md-4">
                <h1> <a href="/products/view/<?=$product->id?>"><?=$product->title?></a></h1>
                <h5><?=$product->id?></h5>
                <td><?=$product->alias?></td>
                <td><?=$product->price?></td>
            </div>
        <?php endforeach;?>

