<?php

/**
 * This is the model class for table "mc_monthly_report".
 *
 * The followings are the available columns in table 'mc_monthly_report':
 * @property integer $id
 * @property string $company
 * @property string $region
 * @property string $site_id
 * @property string $checked_by
 * @property string $check_date
 *
 * The followings are the available model relations:
 * @property PowerReading[] $powerReadings
 * @property CompoundReport[] $compoundReports
 * @property ContainerReport[] $containerReports
 * @property GensetReport[] $gensetReports
 * @property Misc[] $miscs
 */
class McMonthlyReport extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mc_monthly_report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company, region, site_id, checked_by', 'length', 'max'=>50),
			array('check_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company, region, site_id, checked_by, check_date', 'safe', 'on'=>'search'),
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
			'powerReadings' => array(self::HAS_MANY, 'PowerReading', 'report_id'),
			'compoundReports' => array(self::HAS_MANY, 'CompoundReport', 'report_id'),
			'containerReports' => array(self::HAS_MANY, 'ContainerReport', 'report_id'),
			'gensetReports' => array(self::HAS_MANY, 'GensetReport', 'report_id'),
			'miscs' => array(self::HAS_MANY, 'Misc', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company' => 'Company',
			'region' => 'Region',
			'site_id' => 'Site',
			'checked_by' => 'Checked By',
			'check_date' => 'Check Date',
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
                $criteria->condition = "company = ".  Yii::app()->user->account_id;
		$criteria->compare('id',$this->id);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('checked_by',$this->checked_by,true);
		$criteria->compare('check_date',$this->check_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return McMonthlyReport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function beforeValidate() {
            $this->company = Yii::app()->user->account_id;
            return parent::beforeValidate();
        }
}
