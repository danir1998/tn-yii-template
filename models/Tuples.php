<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuples".
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $price
 */
class Tuples extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuples';
    }

    /**
     * Разрешаем подключать в GET запросе expand пример: http://yii/tuples/1?expand=user
     * @return array|false
     */
    public function extraFields()
    {
        return ['user'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * Создаем связь
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ["id" => "idUser"])->asArray();
    }
}
