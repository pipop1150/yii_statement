<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_statement".
 *
 * @property integer $stm_id
 * @property double $stm_amount
 * @property string $stm_create_date
 * @property string $stm_update_date
 * @property integer $stm_user_id
 * @property integer $stm_trs_id
 *
 * @property MsTransactionPayment $stmTrs
 * @property TbUser $stmUser
 */
class TbStatement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_statement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stm_amount'], 'number'],
            [['stm_create_date', 'stm_update_date'], 'safe'],
            [['stm_user_id', 'stm_trs_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stm_id' => 'Stm ID',
            'stm_amount' => 'Stm Amount',
            'stm_create_date' => 'Stm Create Date',
            'stm_update_date' => 'Stm Update Date',
            'stm_user_id' => 'Stm User ID',
            'stm_trs_id' => 'Stm Trs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStmTrs()
    {
        return $this->hasOne(MsTransactionPayment::className(), ['trs_id' => 'stm_trs_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStmUser()
    {
        return $this->hasOne(TbUser::className(), ['usr_id' => 'stm_user_id']);
    }
}
