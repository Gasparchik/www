<?php

class m140623_134024_create_table_cities extends CDbMigration
{
	public function up()
	{
        $this->createTable('cities', array(
            'id' => 'pk',
            'city_name' => 'varchar(30) NOT NULL',
            'is_active' => 'int(1) NOT NULL',
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
        $this->dropTable('cities');
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