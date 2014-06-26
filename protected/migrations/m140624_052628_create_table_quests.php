<?php

class m140624_052628_create_table_quests extends CDbMigration
{
	public function up()
	{
        $this->createTable('quests', array(
            'id' => 'pk',
            'quests_name' => 'varchar(50) NOT NULL',
            'quest_description' => 'varchar(5000) NOT NULL',
            'main_photo_id' => 'varchar(255) NOT NULL',
            'quest_time' => 'int(11) NOT NULL',
            'players_min' => 'int(2) NOT NULL',
            'players_max' => 'int(3) NOT NULL',
            'rating' => 'double NOT NULL',
            'address' => 'varchar(1000) NOT NULL',
            'phone' => 'int(11) NOT NULL',
            'email' => 'varchar(50) NOT NULL',
            'maps_x' => 'varchar(50) NOT NULL',
            'maps_y' => 'varchar(50) NOT NULL',
            'city_id' => 'varchar(50) NOT NULL',
            'parser_id' => 'int(11) NOT NULL',
            'is_used' => 'int(1) NOT NULL',
            'order' => 'int(11) NOT NULL',
            'comment' => 'varchar(255) NOT NULL',
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
        $this->dropTable('quests');
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