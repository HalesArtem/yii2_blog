<?php

use yii\db\Migration;

/**
 * Class m190901_124747_category
 */
class m190901_124747_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Category',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(),
                'parentId' => $this->integer()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190901_124747_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190901_124747_category cannot be reverted.\n";

        return false;
    }
    */
}
