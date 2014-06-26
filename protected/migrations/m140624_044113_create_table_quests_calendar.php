<?php

class m140624_044113_create_table_quests_calendar extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests_calendar', array(
            'id' => 'pk',
            'time' => 'varchar(10) NOT NULL',
            'price' => 'double NOT NULL',
            'period_begin' => 'varchar(25) NOT NULL',
            'period_end' => 'varchar(25) NOT NULL',
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
        $this->dropTable('quests_calendar');
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