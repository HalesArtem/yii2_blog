<?php

use yii\db\Migration;

/**
 * Class m190806_111331_add_products
 */
class m190806_111331_add_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('products', [
            'title' => 'products title1',
            'alias' => 'products alias1',
            'price' => '1',
            'description' => 'products1 description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description ',
        ]);
        $this->insert('products', [
            'title' => 'products title2',
            'alias' => 'products alias2',
            'price' => '2',
            'description' => 'products2 description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description ',
        ]);
        $this->insert('products', [
            'title' => 'products title3',
            'alias' => 'products alias3',
            'price' => '3',
            'description' => 'products description3 products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description ',
        ]);
        $this->insert('products', [
            'title' => 'products title4',
            'alias' => 'products alias4',
            'price' => 'products price4',
            'description' => 'products description4 products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description ',
        ]);
        $this->insert('products', [
            'title' => 'products title5',
            'alias' => 'products alias5',
            'price' => 'products price5',
            'description' => 'products description5 products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description 
             products description products description products description products description products description ',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190806_111331_add_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190806_111331_add_products cannot be reverted.\n";

        return false;
    }
    */
}
