<?php

use yii\db\Schema;
use yii\db\Migration;

class m150404_115742_init_user_table extends Migration
{
    public function up()
    {
        $this->createTable("user",[
            'id' => 'pk',
            'username' => 'string UNIQUE',
            'password' => 'string',
        ]);
        $this->addColumn("user", "auth_key", "string unique");
    }

    public function down()
    {
        $this->dropTable("user");
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
