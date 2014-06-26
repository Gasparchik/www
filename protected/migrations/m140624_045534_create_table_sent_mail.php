<?php

class m140624_045534_create_table_sent_mail extends CDbMigration
{
	public function up()
	{
        $this->createTable('sent_mail', array(
            'id' => 'pk',
            'to' => 'varchar(55) NOT NULL',
            'subject' => 'varchar(255) NOT NULL',
            'content' => 'varchar(255) NOT NULL',
            'is_sent' => 'int(1) NOT NULL',
            'error' => 'int(1) NOT NULL',
        ));
	}

	public function down()
	{
        $this->dropTable('sent_mail');
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