<?php

/**
 * This is the model class for table "static_pages".
 *
 * The followings are the available columns in table 'static_pages':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 * @property integer $deleted
 * @property integer $deleted_denied
 */
class Staticpages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'static_pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			array('create_user_id, update_user_id, deleted, deleted_denied', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, content, create_user_id, create_date, update_user_id, update_date, deleted, deleted_denied', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Страница',
			'content' => 'Содержимое',
			'create_user_id' => 'Create User',
			'create_date' => 'Create Date',
			'update_user_id' => 'Update User',
			'update_date' => 'Update Date',
			'deleted' => 'Deleted',
			'deleted_denied' => 'Deleted Denied',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('deleted',0);
		$criteria->compare('deleted_denied',$this->deleted_denied);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staticpages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    protected function beforeSave(){
        if($this->isNewRecord){
            $this->create_date = date('Y-m-d H:i:s');
            $this->create_user_id = Yii::app()->getModule('admin')->user->getId();
        }
        else{
            $this->update_date = date('Y-m-d H:i:s');
            $this->update_user_id = Yii::app()->getModule('admin')->user->getId();
        }
        return parent::beforeSave();
    }
}
