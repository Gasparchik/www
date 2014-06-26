<?php

class m140624_045743_create_table_files extends CDbMigration
{
	public function up()
	{
        $this->createTable('files', array(
            'id' => 'pk',
            'file_name' => 'varchar(255) NOT NULL',
            'is_used' => 'int(1) NOT NULL',
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
        $this->dropTable('files');
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