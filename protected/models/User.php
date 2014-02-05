<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $id
 * @property string $username
 * @property string $user_alias
 * @property integer $user_sts
 * @property integer $user_trash
 * @property integer $user_active
 * @property string $user_email
 * @property string $password
 * @property integer $ban
 * @property integer $banTime
 * @property string $secure
 * @property integer $lastProject
 * @property integer $lastTask
 * @property integer $lastRecord
 * @property string $timespace_in
 * @property string $timespace_out
 *
 * The followings are the available model relations:
 * @property Group[] $trackerGroups
 * @property Timespan[] $timespans
 */
class User extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username', 'required'),
            array('user_sts, user_trash, user_active, ban, banTime, lastProject, lastTask, lastRecord', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 130),
            array('user_alias', 'length', 'max' => 20),
            array('user_email', 'length', 'max' => 160),
            array('password', 'length', 'max' => 254),
            array('secure, timespace_in, timespace_out', 'length', 'max' => 60),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, user_alias, user_sts, user_trash, user_active, user_email, password, ban, banTime, secure, lastProject, lastTask, lastRecord, timespace_in, timespace_out', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'trackerGroups' => array(self::MANY_MANY, 'Group', '{{groupuser}}(user_id, group_id)'),
            'timespans' => array(self::HAS_MANY, 'Timespan', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'user_alias' => 'User Alias',
            'user_sts' => 'User Sts',
            'user_trash' => 'User Trash',
            'user_active' => 'User Active',
            'user_email' => 'User Email',
            'password' => 'Password',
            'ban' => 'Ban',
            'banTime' => 'Ban Time',
            'secure' => 'Secure',
            'lastProject' => 'Last Project',
            'lastTask' => 'Last Task',
            'lastRecord' => 'Last Record',
            'timespace_in' => 'Timespace In',
            'timespace_out' => 'Timespace Out',
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
        $criteria->compare('username', $this->username, true);
        $criteria->compare('user_alias', $this->user_alias, true);
        $criteria->compare('user_sts', $this->user_sts);
        $criteria->compare('user_trash', $this->user_trash);
        $criteria->compare('user_active', $this->user_active);
        $criteria->compare('user_email', $this->user_email, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('ban', $this->ban);
        $criteria->compare('banTime', $this->banTime);
        $criteria->compare('secure', $this->secure, true);
        $criteria->compare('lastProject', $this->lastProject);
        $criteria->compare('lastTask', $this->lastTask);
        $criteria->compare('lastRecord', $this->lastRecord);
        $criteria->compare('timespace_in', $this->timespace_in, true);
        $criteria->compare('timespace_out', $this->timespace_out, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    //added bay hb
    public function getUserOptions() {
        return CHtml::listData(User::model()->findAll(), 'id', 'name');
    }

}
