<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m190728_142457_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200),
            'short' => $this->string(1000),
            'description' => $this->text(),
        ]);

        $this->createTable('products',[
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
            'alias' => $this->string(100),
            'price' => $this->integer(11),
            'description' => $this->text(),
        ]);

        $this->createTable('orders',[
            'id' => $this->primaryKey(),
            'customer_name' => $this->string(100),
            'email' => $this->string(50),
            'phone' => $this->integer(11),
            'feedback' => $this->text(),
        ]);

        $this->createTable('pages',[
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
            'alias' => $this->string(100),
            'intro' => $this->string(400),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
        $this->dropTable('products');
        $this->dropTable('order');
        $this->dropTable('pages');
    }
}
