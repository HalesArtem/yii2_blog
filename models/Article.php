<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $image
 * @property int $viewed
 * @property int $userId
 * @property int $status
 * @property int $categoryId
 *
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title','description','content'], 'string'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
            [['categoryId'], 'number']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'userId' => 'User ID',
            'status' => 'Status',
            'categoryId' => 'Category ID',
        ];
    }
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }
    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }
    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'categoryId']);
    }

    public function saveCategory($categoryId)
    {
        $category = Category::findOne($categoryId);
        if($category != null)
        {
            $this->link('category', $category);
            return true;
        }
    }
    public function getTags()
    {
        return $this->hasMany(Tag::class, ['id' => 'tagId'])
            ->viaTable('article_tag',['articleId' => 'id'] );
    }
    public function getSelectedTags()
    {
         $selectedTags = $this->getTags()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedTags, 'id') ;

    }
    public function saveTags($tags)
    {
         if (is_array($tags)){
            $this->clearCurrentTags();
             foreach ($tags as $tagId){
                 $tag = Tag::findOne($tagId);
                 $this->link('tags', $tag);
             }
         }
    }
    public function clearCurrentTags()
    {
        ArticleTag::deleteAll(['articleId'=>$this->id]);
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function getDate()
    {
        Yii::$app->formatter->locale = 'ru-RU';
        return Yii::$app->formatter->asDate($this->date);
    }
    public static function  getAll($pageSize = 1)
    {
        $query = Article::find();

        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);

        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }
    public static function getPopular()
    {
        return Article::find()->orderBy('viewed desc')->limit(3)->all();
    }
    public static function getRecent()
    {
        return Article::find()->orderBy('date asc')->limit(4)->all();
    }
}
