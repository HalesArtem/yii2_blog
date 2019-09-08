<?php

use yii\db\Migration;

/**
 * Class m190728_145137_add_posts
 */
class m190728_145137_add_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('post', [
            'title' => 'Elections',
            'short' => 'Test election test test',
            'description' => 'Some another test about elections',
        ]);

        $this->insert('post', [
            'title' => 'Post #2',
            'short' => 'Test post test test',
            'description' => 'Some another test about post',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('post');
    }
}
