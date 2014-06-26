<?php

class m140624_043216_create_table_quests_rating extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests_rating', array(
            'id' => 'pk',
            'quest_id' => 'int(11) NOT NULL',
            'mark' => 'double NOT NULL',
            'time_complete' => 'varchar(20) NOT NULL',
            'user_id' => 'int(11) NOT NULL',
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
        $this->dropTable('quests_rating');
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