<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ms_transaction_payment".
 *
 * @property integer $trs_id
 * @property string $trs_name
 * @property string $trs_create_date
 * @property string $trs_update_date
 * @property integer $trs_group_id
 * @property integer $trs_frequency_id
 * @property string $trs_frequency_name
 *
 * @property TbStatement[] $tbStatements
 * @property TbUserGroup[] $tbUserGroups
 */
class MsTransactionPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_transaction_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trs_create_date', 'trs_update_date'], 'safe'],
            [['trs_group_id', 'trs_frequency_id'], 'integer'],
            [['trs_name'], 'string', 'max' => 512],
            [['trs_frequency_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trs_id' => 'Trs ID',
            'trs_name' => 'Trs Name',
            'trs_create_date' => 'Trs Create Date',
            'trs_update_date' => 'Trs Update Date',
            'trs_group_id' => 'Trs Group ID',
            'trs_frequency_id' => 'Trs Frequency ID',
            'trs_frequency_name' => 'Trs Frequency Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbStatements()
    {
        return $this->hasMany(TbStatement::className(), ['stm_trs_id' => 'trs_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUserGroups()
    {
        return $this->hasMany(TbUserGroup::className(), ['grp_transaction_id' => 'trs_id']);
    }
}
