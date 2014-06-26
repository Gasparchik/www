<?php

/**
 * This is the model class for table "quests_free".
 *
 * The followings are the available columns in table 'quests_free':
 * @property integer $id
 * @property integer $quest_id
 * @property integer $user_id
 * @property string $date_begin
 * @property string $date_end
 * @property string $time_begin
 * @property string $time_end
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 * @property integer $deleted
 * @property integer $deleted_denied
 */
class Questsfree extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quests_free';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quest_id, user_id, date_begin, date_end, time_begin, time_end', 'required'),
			array('quest_id, user_id, create_user_id, update_user_id, deleted, deleted_denied', 'numerical', 'integerOnly'=>true),
			array('time_begin, time_end', 'length', 'max'=>20),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, quest_id, user_id, date_begin, date_end, time_begin, time_end, create_user_id, create_date, update_user_id, update_date, deleted, deleted_denied', 'safe', 'on'=>'search'),
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
            'author'=>array(self::BELONGS_TO,'Users','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'quest_id' => 'Квест',
			'user_id' => 'Пользователь',
			'date_begin' => 'Дата начала',
			'date_end' => 'Дата завершения',
			'time_begin' => 'Начальное время',
			'time_end' => 'Конечное время',
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
		$criteria->compare('quest_id',$this->quest_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('date_begin',$this->date_begin,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('time_begin',$this->time_begin,true);
		$criteria->compare('time_end',$this->time_end,true);
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
	 * @return Questsfree the static model class
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
