<?php

use yii\db\Migration;

/**
 * Class m190806_111425_add_pages
 */
class m190806_111425_add_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('pages',[
            'title' => 'Testing page',
            'alias' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota',
            'intro' => 'Egipet prodal chetirem ',
            'content' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota.',
        ]);
        $this->insert('pages',[
            'title' => 'Testing Testing Testing Testing nebolshoe',
            'alias' => 'V Egipte proizochlo nebolshoe zemletriasenie',
            'intro' => 'Egipet prodal chetirem ',
            'content' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota.',
        ]);
        $this->insert('pages',[
            'title' => 'Testing Testing Testing nebolshoe — Plammep osvobodili',
            'alias' => 'Loru Plammep osvobodili dosrochno - i vidvorili iz Egipta',
            'intro' => 'Egipet prodal chetirem ',
            'content' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota.',
        ]);
        $this->insert('pages',[
            'title' => 'Egipet prodal chetirem kompaniam',
            'alias' => 'V Hurgade britanskiu turist umer posle otkliuchenia ot aparata - ne dogovorilsia s medikami',
            'intro' => 'Egipet prodal chetirem ',
            'content' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota.',
        ]);
        $this->insert('pages',[
            'title' => 'Egipet prodal chetirem ssdfsdfsdfsdfsdfsdfsdfd',
            'alias' => ' ssdfsdfsdfsdfsdfsdfsdfd',
            'intro' => 'Egipet prodal chetirem ',
            'content' => 'Egipet prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota prodal chetirem kompaniam pravo na dobishu zolota Egipet prodal chetirem kompaniam pravo
             na dobishu zolota.',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190806_111425_add_pages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190806_111425_add_pages cannot be reverted.\n";

        return false;
    }
    */
}
