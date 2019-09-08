<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m190903_184749_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'userId' => $this->integer(),
            'articleId' => $this->integer(),
            'status' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-post-user-id',
            'comment',
            'userId'
        );

        $this->addForeignKey(
            'fk-post-user-id',
            'comment',
            'userId',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-article-id',
            'comment',
            'articleId'
        );

        $this->addForeignKey(
            'fk-article-id',
            'comment',
            'articleId',
            'article',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
