<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "locality".
 *
 * @property int $id
 * @property string $localityName
 * @property string $localityLat
 * @property string $localityLong
 */
class Locality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','id', 'lat', 'lng', 'type'], 'required'],
            [['localityName', 'lat', 'lng', 'localityType'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'localityName' => Yii::t('app', 'Locality Name'),
            'localityLat' => Yii::t('app', 'Locality Lat'),
            'localityLong' => Yii::t('app', 'Locality Long'),
        ];
    }
}
