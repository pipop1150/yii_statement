<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property integer $usr_id
 * @property string $usr_name
 * @property string $usr_mail
 * @property string $usr_create_date
 * @property string $usr_update_date
 *
 * @property TbStatement[] $tbStatements
 * @property TbUserGroup[] $tbUserGroups
 */
class TbUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usr_create_date', 'usr_update_date'], 'safe'],
            [['usr_name'], 'string', 'max' => 1024],
            [['usr_mail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usr_id' => 'Usr ID',
            'usr_name' => 'Usr Name',
            'usr_mail' => 'Usr Mail',
            'usr_create_date' => 'Usr Create Date',
            'usr_update_date' => 'Usr Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbStatements()
    {
        return $this->hasMany(TbStatement::className(), ['stm_user_id' => 'usr_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUserGroups()
    {
        return $this->hasMany(TbUserGroup::className(), ['grp_user_id' => 'usr_id']);
    }
}
