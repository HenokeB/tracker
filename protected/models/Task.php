<?php

/**
 * This is the model class for table "{{task}}".
 *
 * The followings are the available columns in table '{{task}}':
 * @property string $id
 * @property string $task_name
 * @property string $task_description
 * @property integer $task_visible
 * @property integer $task_filter
 * @property integer $task_trash
 * @property string $project_id
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property Timespan[] $timespans
 */
class Task extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{task}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('task_name, task_description, project_id', 'required'),
			array('task_visible, task_filter, task_trash', 'numerical', 'integerOnly'=>true),
			array('task_name', 'length', 'max'=>255),
			array('project_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, task_name, task_description, task_visible, task_filter, task_trash, project_id', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'timespans' => array(self::HAS_MANY, 'Timespan', 'task_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'task_name' => 'Task Name',
			'task_description' => 'Task Description',
			'task_visible' => 'Task Visible',
			'task_filter' => 'Task Filter',
			'task_trash' => 'Task Trash',
			'project_id' => 'Project',
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
		$criteria->compare('task_name',$this->task_name,true);
		$criteria->compare('task_description',$this->task_description,true);
		$criteria->compare('task_visible',$this->task_visible);
		$criteria->compare('task_filter',$this->task_filter);
		$criteria->compare('task_trash',$this->task_trash);
		$criteria->compare('project_id',$this->project_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getUTaskOptions() {
        return CHtml::listData(Task::model()->findAll(), 'id', 'name');
    }
}
