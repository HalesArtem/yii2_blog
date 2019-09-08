
<?php

/**
 * @var \app\models\Page[] $pages
 * @var \app\models\Page $title
 */
?>
<h2><?=$title?></h2>
<div class="form-group">
    <a href="/pages/create" class="btn btn-success">Create</a>
</div>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">alias</th>
        <th scope="col">content</th>
    </tr>
    </thead>
    <?php foreach ($pages as $page ):?>
        <tbody>
        <tr>
            <th scope="row"><?=$page->id?></th>
            <td> <a href="/pages/view/<?=$page->id?>"><?=$page->title?></a></td>
            <td><?=$page->alias?></td>
            <td><?=$page->intro?></td>
        </tr>
        </tbody>
    <?php endforeach;?>
</table>