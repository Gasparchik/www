<?php

class m140624_050014_create_table_quests_photo extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests_photo', array(
            'id' => 'pk',
            'quest_id' => 'int(11) NOT NULL',
            'file_id' => 'int(11) NOT NULL',
        ));
	}

	public function down()
	{
        $this->dropTable('quests_photo');
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