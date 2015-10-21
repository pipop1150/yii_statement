<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_criterial".
 *
 * @property integer $ctr_id
 * @property integer $ctr_tnk_id
 * @property double $ctr_priority
 * @property string $ctr_criterial
 *
 * @property TbTaskprocess $ctrTnk
 */
class TbCriterial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_criterial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ctr_tnk_id'], 'integer'],
            [['ctr_priority'], 'number'],
            [['ctr_criterial'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ctr_id' => 'Ctr ID',
            'ctr_tnk_id' => 'Ctr Tnk ID',
            'ctr_priority' => 'Ctr Priority',
            'ctr_criterial' => 'Ctr Criterial',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtrTnk()
    {
        return $this->hasOne(TbTaskprocess::className(), ['tkp_id' => 'ctr_tnk_id']);
    }
}
