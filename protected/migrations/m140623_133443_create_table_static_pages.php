<?php

class m140623_133443_create_table_static_pages extends CDbMigration
{
	public function up()
	{
        $this->createTable('static_pages', array(
            'id' => 'pk',
            'title' => 'varchar(255) NOT NULL',
            'content' => 'text NOT NULL',
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
        $this->dropTable('static_pages');
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