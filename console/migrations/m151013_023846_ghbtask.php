<?php

use yii\db\Schema;
use yii\db\Migration;

class m151013_023846_ghbtask extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('tb_taskname', [
            'tkn_id' => $this->primaryKey(),
            'tkn_name' => $this->string(512),
            'tkn_everyday' => $this->string(2),
            'tkn_everyweek' => $this->string(2),
            'tkn_everymonth' => $this->string(2),
            'tkn_onetime' => $this->boolean(),
        ], $tableOptions);

        $this->createTable('tb_taskprocess', [
            'tkp_id' => $this->primaryKey(),
            'tkp_tkn_id' => $this->integer(),
            'tkp_status_success' => $this->boolean(),
            'tkp_start_date' => $this->dateTime(),
            'tkp_end_date' => $this->dateTime(),
            'tkp_message' => $this->string(1024),
        ], $tableOptions);

        $this->createTable('tb_criterial', [
            'ctr_id' => $this->primaryKey(),
            'ctr_tnk_id' => $this->integer(),
            'ctr_priority' => $this->double(),
            'ctr_criterial' => $this->string(1024),
        ], $tableOptions);


        $this->addForeignKey('fk_tkp_tkn_id', 'tb_taskprocess', 'tkp_tkn_id', 'tb_taskname', 'tkn_id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fk_ctr_tnk_id', 'tb_criterial', 'ctr_tnk_id', 'tb_taskprocess', 'tkp_id', 'RESTRICT', 'RESTRICT');

    }

    public function down()
    {

        $this->dropTable('tb_criterial');
        $this->dropTable('tb_taskprocess');
        $this->dropTable('tb_taskname');
        echo "Drop table name tb_criterial, tb_taskprocess, tb_taskname ./n";
        echo "Total 3 table";

        return false;
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
