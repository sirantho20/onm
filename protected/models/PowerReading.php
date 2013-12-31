<?php

/**
 * This is the model class for table "power_reading".
 *
 * The followings are the available columns in table 'power_reading':
 * @property integer $id
 * @property double $genset_run_hrs
 * @property double $fuel_on_site
 * @property double $kw_reading
 * @property double $current_phase1
 * @property double $current_phase2
 * @property double $current_phase3
 * @property integer $report_id
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class PowerReading extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'power_reading';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_id', 'numerical', 'integerOnly'=>true),
			array('genset_run_hrs, fuel_on_site, kw_reading, current_phase1, current_phase2, current_phase3', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, genset_run_hrs, fuel_on_site, kw_reading, current_phase1, current_phase2, current_phase3, report_id', 'safe', 'on'=>'search'),
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
			'genset_run_hrs' => 'Genset Run Hrs',
			'fuel_on_site' => 'Fuel On Site',
			'kw_reading' => 'Kw Reading',
			'current_phase1' => 'Current Phase1',
			'current_phase2' => 'Current Phase2',
			'current_phase3' => 'Current Phase3',
			'report_id' => 'Report',
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
		$criteria->compare('genset_run_hrs',$this->genset_run_hrs);
		$criteria->compare('fuel_on_site',$this->fuel_on_site);
		$criteria->compare('kw_reading',$this->kw_reading);
		$criteria->compare('current_phase1',$this->current_phase1);
		$criteria->compare('current_phase2',$this->current_phase2);
		$criteria->compare('current_phase3',$this->current_phase3);
		$criteria->compare('report_id',$this->report_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PowerReading the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
