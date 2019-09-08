<?php

use yii\db\Migration;

/**
 * Class m190826_101231_paret_table
 */
class m190826_101231_paret_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('parentCategory',
            [
                'title' => 'vegetables'
            ]);
        $this->insert('parentCategory',
            [
                'title' => 'meat'
            ]);
        $this->insert('parentCategory',
            [
                'title' => 'beer'
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190826_101231_paret_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190826_101231_paret_table cannot be reverted.\n";

        return false;
    }
    */
}
