<?php

class m140623_134534_create_table_users extends CDbMigration
{
	public function up()
	{
        $this->createTable('users', array(
            'id' => 'pk',
            'email' => 'varchar(50) NOT NULL',
            'phone' => 'varchar(20) NOT NULL',
            'request_type' => 'enum("quest_free", "quest_rating") NOT NULL',
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
        $this->dropTable('users');
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