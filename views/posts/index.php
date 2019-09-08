<?php
/**
 * @var \app\models\Post[] $posts
 * @var \app\models\Post $title
 */

?>
<h1><?=$title?></h1>
<?php foreach ($posts as $post) : ?>

<div class="col-md-4">
    <h2><?=$post->title?></h2>
    <p><?=$post->short?></p>
    <?=\yii\helpers\Html::a(
            'View',
            '/posts/view/' . $post->id,
            ['class' => 'btn btn-primary'])
    ?>
</div>

<?php endforeach; ?>
