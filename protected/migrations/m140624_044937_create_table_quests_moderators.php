<?php

class m140624_044937_create_table_quests_moderators extends CDbMigration
{
	public function up()
	{
        $this->createTable('moderators', array(
            'id' => 'pk',
            'is_super' => 'int(1) NOT NULL',
            'login' => 'varchar(25) NOT NULL',
            'password' => 'varchar(50) NOT NULL',
            'user_name' => 'varchar(50) NOT NULL',
            'email' => 'varchar(25) NOT NULL',
            'create_user_id' => 'int(11)',
            'create_date' => 'datetime',
            'update_user_id' => 'int(11)',
            'update_date' => 'datetime',
            'deleted' => 'int(1) DEFAULT 0',
            'deleted_denied' => 'int(1) DEFAULT 0',
        ));
	}

	public function down()
	{
        $this->dropTable('moderators');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}