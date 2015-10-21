<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_taskname".
 *
 * @property integer $tkn_id
 * @property string $tkn_name
 * @property string $tkn_everyday
 * @property string $tkn_everyweek
 * @property string $tkn_everymonth
 * @property integer $tkn_onetime
 *
 * @property TbTaskprocess[] $tbTaskprocesses
 */
class TbTaskname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_taskname';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tkn_onetime'], 'integer'],
            [['tkn_name'], 'string', 'max' => 512],
            [['tkn_everyday', 'tkn_everyweek', 'tkn_everymonth'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tkn_id' => 'Tkn ID',
            'tkn_name' => 'Tkn Name',
            'tkn_everyday' => 'Tkn Everyday',
            'tkn_everyweek' => 'Tkn Everyweek',
            'tkn_everymonth' => 'Tkn Everymonth',
            'tkn_onetime' => 'Tkn Onetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbTaskprocesses()
    {
        return $this->hasMany(TbTaskprocess::className(), ['tkp_tkn_id' => 'tkn_id']);
    }
}
