<?php


namespace app\controllers;


use app\models\Order;
use yii\web\Controller;

class OrdersController extends Controller
{
    public function actionIndex()
    {
        $orders = Order::find()->all();

        return $this->render('index',[
            'title' => 'Order view',
            'orders' => $orders
        ]);
    }
    public function actionView($id)
    {
        $order = Order::findOne($id);

        return $this->render('view',
            [
                'order' => $order
            ]
        );
    }
}

