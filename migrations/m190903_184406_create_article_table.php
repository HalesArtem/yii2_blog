<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m190903_184406_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'userId' => $this->integer(),
            'status' => $this->integer(),
            'categoryId' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
