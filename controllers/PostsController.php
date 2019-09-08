<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 31.07.19
 * Time: 19:27
 */

namespace app\controllers;



use app\models\Post;
use yii\web\Controller;

class PostsController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()->all();

        return $this->render(
            'index',
            [
                'title' => 'Posts List',
                'posts' => $posts,
            ]
        );
    }

    public function actionView($id)
    {
        $post = Post::findOne($id);

        return $this->render('view', ['post' => $post]);
    }
}