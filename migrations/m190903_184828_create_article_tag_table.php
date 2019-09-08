<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_tag`.
 */
class m190903_184828_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'articleId'=>$this->integer(),
            'tagId'=>$this->integer()
        ]);

        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'articleId'
        );

        $this->addForeignKey(
            'tag_article_article_id',
            'article_tag',
            'articleId',
            'article',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx_tag_id',
            'article_tag',
            'tagId'
        );

        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tagId',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article_tag');
    }
}
