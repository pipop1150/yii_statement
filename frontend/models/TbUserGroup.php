<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user_group".
 *
 * @property integer $grp_id
 * @property integer $grp_user_id
 * @property integer $grp_transaction_id
 *
 * @property MsTransactionPayment $grpTransaction
 * @property TbUser $grpUser
 */
class TbUserGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_user_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grp_user_id', 'grp_transaction_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grp_id' => 'Grp ID',
            'grp_user_id' => 'Grp User ID',
            'grp_transaction_id' => 'Grp Transaction ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrpTransaction()
    {
        return $this->hasOne(MsTransactionPayment::className(), ['trs_id' => 'grp_transaction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrpUser()
    {
        return $this->hasOne(TbUser::className(), ['usr_id' => 'grp_user_id']);
    }
}
