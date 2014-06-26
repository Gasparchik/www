<?php

class m140624_044351_create_table_quests_booking extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests_booking', array(
            'id' => 'pk',
            'quest_id' => 'int(11) NOT NULL',
            'quest_calendar_id' => 'int(11) NOT NULL',
            'quest_date' => 'date NOT NULL',
            'is_busy' => 'int(1) NOT NULL',
        ));
	}

	public function down()
	{
        $this->dropTable('quests_booking');
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