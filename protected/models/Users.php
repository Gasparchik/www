<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $email
 * @property string $phone
 * @property string $request_type
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 * @property integer $deleted
 * @property integer $deleted_denied
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, phone, request_type', 'required'),
			array('create_user_id, update_user_id, deleted, deleted_denied', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>20),
			array('request_type', 'length', 'max'=>12),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, phone, request_type, create_user_id, create_date, update_user_id, update_date, deleted, deleted_denied', 'safe', 'on'=>'search'),
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
			'email' => 'Email',
			'phone' => 'Телефон',
			'request_type' => 'Тип запроса',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('request_type',$this->request_type,true);
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
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * в случае изменения этой модели через админку заменить
     * Yii::app()->user->getId() на Yii::app()->getModule('admin')->user->getId();
     */
    protected function beforeSave(){
        if($this->isNewRecord){
            $this->create_date = date('Y-m-d H:i:s');
            $this->create_user_id = Yii::app()->user->getId();
        }
        else{
            $this->update_date = date('Y-m-d H:i:s');
            $this->update_user_id = Yii::app()->user->getId();
        }
        return parent::beforeSave();
    }
}
