<?php


namespace app\controllers;


use app\models\Page;
use yii\web\Controller;

class PagesController extends Controller
{
    public function actionIndex()
    {
        $pages = Page::find()->all();

        return $this->render('index',[
            'title' => 'Page view',
            'pages' => $pages
        ]);
    }
    public function actionView($id)
    {
        $page = Page::findOne($id);

        return $this->render('view',
            [
                'page' => $page
            ]
        );
    }
    public function actionCreate()
    {
        if (\Yii::$app->request->isPost){
        $page = new Page();
            $page->title = \Yii::$app->request->post('title');
            $page->alias = \Yii::$app->request->post('alias');
            $page->intro = \Yii::$app->request->post('intro');
            $page->content = \Yii::$app->request->post('content');
            if ($page->save()){
                $this->redirect('/pages/index');
            }
        }

        return $this->render('create');
    }
}
