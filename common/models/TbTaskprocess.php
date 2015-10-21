<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_taskprocess".
 *
 * @property integer $tkp_id
 * @property integer $tkp_tkn_id
 * @property integer $tkp_status_success
 * @property string $tkp_start_date
 * @property string $tkp_end_date
 * @property string $tkp_message
 *
 * @property TbCriterial[] $tbCriterials
 * @property TbTaskname $tkpTkn
 */
class TbTaskprocess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_taskprocess';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tkp_tkn_id', 'tkp_status_success'], 'integer'],
            [['tkp_start_date', 'tkp_end_date'], 'safe'],
            [['tkp_message'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tkp_id' => 'Tkp ID',
            'tkp_tkn_id' => 'Tkp Tkn ID',
            'tkp_status_success' => 'Tkp Status Success',
            'tkp_start_date' => 'Tkp Start Date',
            'tkp_end_date' => 'Tkp End Date',
            'tkp_message' => 'Tkp Message',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbCriterials()
    {
        return $this->hasMany(TbCriterial::className(), ['ctr_tnk_id' => 'tkp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTkpTkn()
    {
        return $this->hasOne(TbTaskname::className(), ['tkn_id' => 'tkp_tkn_id']);
    }
}
