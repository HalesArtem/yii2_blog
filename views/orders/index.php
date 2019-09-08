
<?php

/**
 * @var \app\models\Order[] $orders
 * @var \app\models\Order $title
 */
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">customer name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
    </tr>
    </thead>
    <?php foreach ($orders as $order ):?>
        <tbody>
        <tr>
            <th scope="row"><?=$order->id?></th>
            <td> <a href="/orders/view/<?=$order->id?>"><?=$order->customer_name?></a></td>
            <td><?=$order->email?></td>
            <td><?=$order->phone?></td>
        </tr>
        </tbody>
    <?php endforeach;?>
</table>