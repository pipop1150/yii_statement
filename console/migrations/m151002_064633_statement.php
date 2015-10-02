<?php

use yii\db\Schema;
use yii\db\Migration;

class m151002_064633_statement extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ms_transaction_payment', [
            'trs_id' => $this->primaryKey(),
            'trs_name' => $this->string(512),
            'trs_create_date' => $this->dateTime(),
            'trs_update_date' => $this->dateTime(),
            'trs_group_id' => $this->integer(),
            'trs_frequency_id' => $this->integer(),
            'trs_frequency_name' => $this->string(),
        ], $tableOptions);

        $this->createTable('tb_statement', [
            'stm_id' => $this->primaryKey(),
            'stm_amount' => $this->double(),
            'stm_create_date' => $this->dateTime(),
            'stm_update_date' => $this->dateTime(),
            'stm_usr_id' => $this->integer(),
            'stm_trs_id' => $this->integer(),
        ], $tableOptions);

        $this->createTable('tb_user', [
            'usr_id' => $this->primaryKey(),
            'usr_name' => $this->string(512),
            'usr_mail' => $this->string(255),
            'usr_create_date' => $this->dateTime(),
            'usr_update_date' => $this->dateTime(),
        ], $tableOptions);

        $this->createTable('tb_user_group', [
            'grp_id' => $this->primaryKey(),
            'grp_usr_id' => $this->integer(),
            'grp_trs_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk_grp_usr_id', 'tb_user_group', 'grp_usr_id', 'tb_user', 'usr_id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fk_grp_trs_id', 'tb_user_group', 'grp_trs_id', 'tb_user_group', 'grp_id', 'RESTRICT', 'RESTRICT');

        $this->addForeignKey('fk_stm_trs_id', 'tb_statement', 'stm_trs_id', 'ms_transaction_payment', 'trs_id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fk_stm_usr_id', 'tb_statement', 'stm_usr_id', 'tb_user', 'usr_id', 'RESTRICT', 'RESTRICT');


        //$this->addForeignKey('', '', '', '', '', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('tb_user_group');
        $this->dropTable('tb_statement');
        $this->dropTable('tb_user');
        $this->dropTable('ms_transaction_payment');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
