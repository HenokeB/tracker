<?php

/**
 * This is the model class for table "{{project}}".
 *
 * The followings are the available columns in table '{{project}}':
 * @property string $id
 * @property string $project_name
 * @property string $project_description
 * @property integer $project_visible
 * @property integer $project_filter
 * @property integer $project_trash
 *
 * The followings are the available model relations:
 * @property Group[] $trackerGroups
 * @property Task[] $tasks
 * @property Timespan[] $timespans
 */
class Project extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{project}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('project_name, project_description', 'required'),
            array('project_visible, project_filter, project_trash', 'numerical', 'integerOnly' => true),
            array('project_name', 'length', 'max' => 255),
           
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, project_name, project_description, project_visible, project_filter, project_trash', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'trackerGroups' => array(self::MANY_MANY, 'Group', '{{groupproject}}(project_id, group_id)' , 'index'=>'id'),
            'tasks' => array(self::HAS_MANY, 'Task', 'project_id'),
            'timespans' => array(self::HAS_MANY, 'Timespan', 'project_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'project_name' => 'Project Name',
            'group_id' =>'Group ID',
            'project_description' => 'Project Description',
            'project_visible' => 'Project Visible',
            'project_filter' => 'Project Filter',
            'project_trash' => 'Project Trash',
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

        $criteria->compare('id', $this->id, true);
        //$criteria->compare('group_id', $this->trackerGroups->id, true);
        $criteria->compare('project_name', $this->project_name, true);
        $criteria->compare('project_description', $this->project_description, true);
        $criteria->compare('project_visible', $this->project_visible);
        $criteria->compare('project_filter', $this->project_filter);
        $criteria->compare('project_trash', $this->project_trash);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Project the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    //added by hb

    public function addGroup($group) {
        if ($group->isNewRecord()) {
            $group->save();
            $groupproject = new Groupproject();
            $groupproject->project_id= $this->id;
            $groupproject->group_id = $group->id;
            $groupproject->save();
        }
    }

}
