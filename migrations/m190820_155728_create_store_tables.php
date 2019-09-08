<?php

use yii\db\Migration;

/**
 * Class m190820_155728_create_store_tables
 */
class m190820_155728_create_store_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('parentCategory',[
            'id' => $this->primaryKey(),
            'title' => $this->string()

        ]);

        $this->createTable('productCategory',[
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'parentId' => $this->integer(),

            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190820_155728_create_store_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190820_155728_create_store_tables cannot be reverted.\n";

        return false;
    }
    */
}
