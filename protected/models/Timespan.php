<?php

/**
 * This is the model class for table "{{timespan}}".
 *
 * The followings are the available columns in table '{{timespan}}':
 * @property string $id
 * @property integer $timespan_in
 * @property integer $timespan_out
 * @property integer $timespan_time
 * @property string $user_id
 * @property string $project_id
 * @property string $task_id
 * @property string $timespan_comment
 * @property integer $timespan_comment_type
 * @property integer $timespan_cleared
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Project $project
 * @property Task $task
 */
class Timespan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{timespan}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('user_id, project_id, task_id', 'required'),
            array('timespan_in, timespan_out, timespan_time, timespan_comment_type, timespan_cleared', 'numerical', 'integerOnly' => true),
            //array('user_id, project_id, task_id', 'length', 'max'=>10),
            array('timespan_comment', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, timespan_in, timespan_out, timespan_time, user_id, project_id, task_id, timespan_comment, timespan_comment_type, timespan_cleared', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
            'task' => array(self::BELONGS_TO, 'Task', 'task_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'timespan_in' => 'Timespan In',
            'timespan_out' => 'Timespan Out',
            'timespan_time' => 'Timespan Time',
            'user_id' => 'User',
            'project_id' => 'Project',
            'task_id' => 'Task',
            'timespan_comment' => 'Timespan Comment',
            'timespan_comment_type' => 'Timespan Comment Type',
            'timespan_cleared' => 'Timespan Cleared',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        
        $criteria->with = array('user' => array( ));

        $criteria->compare('id', $this->id, true);
        $criteria->compare('timespan_in', $this->timespan_in);
        $criteria->compare('timespan_out', $this->timespan_out);
        $criteria->compare('timespan_time', $this->timespan_time);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('project_id', $this->project_id, true);
        $criteria->compare('task_id', $this->task_id, true);
        $criteria->compare('timespan_comment', $this->timespan_comment, true);
        $criteria->compare('timespan_comment_type', $this->timespan_comment_type);
        $criteria->compare('timespan_cleared', $this->timespan_cleared);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Timespan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
