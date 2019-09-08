<?php


namespace app\controllers;


use app\models\Product;
use yii\web\Controller;

class ProductsController extends Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();
        return $this->render('index',
            [
                'title' => 'Products view',
                'products' => $products
            ]
        );
    }
    public function actionView($id)
    {
        $product = Product::findOne($id);

        return $this->render('view',
            [
                'products' => $product
            ]
        );
    }
    public function actionCategory()
    {

        return $this->render('category',
            [
                'title'=> 'Title category'
            ]);
    }
}