<?php

use yii\db\Migration;

/**
 * Class m190806_111403_add_orders
 */
class m190806_111403_add_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('orders',[
            'customer_name' => 'orders1',
            'email' => 'email orders1',
            'phone' => '0931235746',
            'feedback' => 'feedback1 feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback ',
        ]);
        $this->insert('orders',[
            'customer_name' => 'orders2',
            'email' => 'email orders2',
            'phone' => '0931235746',
            'feedback' => 'feedback2 feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback ',
        ]);
        $this->insert('orders',[
            'customer_name' => 'orders3',
            'email' => 'email orders3',
            'phone' => '0931235746',
            'feedback' => 'feedback3 feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback ',
        ]);
        $this->insert('orders',[
            'customer_name' => 'orders4',
            'email' => 'email orders4',
            'phone' => '0931235746',
            'feedback' => 'feedback4 feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback ',
        ]);
        $this->insert('orders',[
            'customer_name' => 'orders5',
            'email' => 'email orders5',
            'phone' => '0931235746',
            'feedback' => 'feedback5 feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback feedback 
            feedback feedback feedback feedback feedback feedback feedback feedback feedback ',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190806_111403_add_orders cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190806_111403_add_orders cannot be reverted.\n";

        return false;
    }
    */
}
