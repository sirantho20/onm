<?php

/**
 * This is the model class for table "site_issues".
 *
 * The followings are the available columns in table 'site_issues':
 * @property integer $id
 * @property integer $report_id
 * @property string $issue_description
 * @property string $issue_action
 * @property string $issue_action_date
 * @property string $issue_date
 * @property string $raised_by
 * @property string $fs_comment
 * @property string $fs_comment_date
 * @property string $resolution_date
 * @property string $fs_confirm_resolution
 * @property string $fs_confirm_date
 * @property string $site_id
 * @property string $site_name
 * @property string $issue_type
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class SiteIssues extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'site_issues';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('issue_description', 'required'),
			array('report_id', 'numerical', 'integerOnly'=>true),
			array('raised_by, site_id, site_name, issue_type', 'length', 'max'=>50),
			array('fs_confirm_resolution', 'length', 'max'=>1),
			array('issue_action, issue_action_date, issue_date, fs_comment, fs_comment_date, resolution_date, fs_confirm_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, issue_description, issue_action, issue_action_date, issue_date, raised_by, fs_comment, fs_comment_date, resolution_date, fs_confirm_resolution, fs_confirm_date, site_id, site_name, issue_type', 'safe', 'on'=>'search'),
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
			'report' => array(self::BELONGS_TO, 'McMonthlyReport', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'report_id' => 'Report',
			'issue_description' => 'Issue Description',
			'issue_action' => 'Issue Action',
			'issue_action_date' => 'Issue Action Date',
			'issue_date' => 'Issue Date',
			'raised_by' => 'Raised By',
			'fs_comment' => 'Fs Comment',
			'fs_comment_date' => 'Fs Comment Date',
			'resolution_date' => 'Resolution Date',
			'fs_confirm_resolution' => 'Fs Confirm Resolution',
			'fs_confirm_date' => 'Fs Confirm Date',
			'site_id' => 'Site',
			'site_name' => 'Site Name',
			'issue_type' => 'Issue Type',
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
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('issue_description',$this->issue_description,true);
		$criteria->compare('issue_action',$this->issue_action,true);
		$criteria->compare('issue_action_date',$this->issue_action_date,true);
		$criteria->compare('issue_date',$this->issue_date,true);
		$criteria->compare('raised_by',$this->raised_by,true);
		$criteria->compare('fs_comment',$this->fs_comment,true);
		$criteria->compare('fs_comment_date',$this->fs_comment_date,true);
		$criteria->compare('resolution_date',$this->resolution_date,true);
		$criteria->compare('fs_confirm_resolution',$this->fs_confirm_resolution,true);
		$criteria->compare('fs_confirm_date',$this->fs_confirm_date,true);
		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('site_name',$this->site_name,true);
		$criteria->compare('issue_type',$this->issue_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SiteIssues the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function beforeValidate() {
            if($this->raised_by == '')
            {
                $this->raised_by = Yii::app()->user->full_name;
            }
            parent::beforeValidate();
        }
}
