<?php

class m140624_044654_create_table_quests_free extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests_free', array(
            'id' => 'pk',
            'quest_id' => 'int(11) NOT NULL',
            'user_id' => 'int(11) NOT NULL',
            'date_begin' => 'datetime NOT NULL',
            'date_end' => 'datetime NOT NULL',
            'time_begin' => 'varchar(20) NOT NULL',
            'time_end' => 'varchar(20) NOT NULL',
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
        $this->dropTable('quests_free');
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