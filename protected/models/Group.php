<?php

/**
 * This is the model class for table "{{group}}".
 *
 * The followings are the available columns in table '{{group}}':
 * @property string $id
 * @property string $group_name
 * @property integer $group_trash
 *
 * The followings are the available model relations:
 * @property Project[] $trackerProjects
 * @property User[] $trackerUsers
 */
class Group extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{group}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_name', 'required'),
			array('group_trash', 'numerical', 'integerOnly'=>true),
			array('group_name', 'length', 'max'=>160),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_name, group_trash', 'safe', 'on'=>'search'),
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
			'trackerProjects' => array(self::MANY_MANY, 'Project', '{{groupproject}}(group_id, project_id)'),
			'trackerUsers' => array(self::MANY_MANY, 'User', '{{groupuser}}(group_id, user_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_name' => 'Group Name',
			'group_trash' => 'Group Trash',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('group_trash',$this->group_trash);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Group the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
