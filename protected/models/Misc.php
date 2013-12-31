<?php

/**
 * This is the model class for table "misc".
 *
 * The followings are the available columns in table 'misc':
 * @property integer $id
 * @property integer $report_id
 * @property string $access_road_good_condition
 * @property string $access_road_good_condition_ACTION
 * @property string $access_road_good_condition_ACTION_DATE
 * @property string $access_road_good_condition_FS_COMMENT
 * @property string $access_road_good_condition_FS_COMMENT_DATE
 * @property string $transformer_leakage
 * @property string $transformer_leakage_ACTION
 * @property string $transformer_leakage_ACTION_DATE
 * @property string $transformer_leakage_FS_COMMENT
 * @property string $transformer_leakage_FS_COMMENT_DATE
 * @property string $used_part_oil_dump
 * @property string $used_part_oil_dump_ACTION
 * @property string $used_part_oil_dump_ACTION_DATE
 * @property string $used_part_oil_dump_FS_COMMENT
 * @property string $used_part_oil_dump_FS_COMMENT_DATE
 * @property string $visible_celtel_billboard
 * @property string $visible_celtel_billboard_ACTION
 * @property string $visible_celtel_billboard_ACTION_DATE
 * @property string $visible_celtel_billboard_FS_COMMENT
 * @property string $visible_celtel_billboard_FS_COMMENT_DATE
 * @property string $ecg_mains_near_site
 * @property string $ecg_mains_near_site_ACTION
 * @property string $ecg_mains_near_site_ACTION_DATE
 * @property string $ecg_mains_near_site_FS_COMMENT
 * @property string $ecg_mains_near_site_FS_COMMENT_DATE
 * @property string $signs_of_fuel_on_site
 * @property string $signs_of_fuel_on_site_ACTION
 * @property string $signs_of_fuel_on_site_ACTION_DATE
 * @property string $signs_of_fuel_on_site_FS_COMMENT
 * @property string $signs_of_fuel_on_site_FS_COMMENT_DATE
 * @property string $status
 * @property string $closed_date
 * @property string $closed_by
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class Misc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'misc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, transformer_leakage', 'required'),
			array('id, report_id', 'numerical', 'integerOnly'=>true),
			array('access_road_good_condition, transformer_leakage, used_part_oil_dump, visible_celtel_billboard, ecg_mains_near_site, signs_of_fuel_on_site', 'length', 'max'=>1),
			array('status, closed_by', 'length', 'max'=>50),
			array('access_road_good_condition_ACTION, access_road_good_condition_ACTION_DATE, access_road_good_condition_FS_COMMENT, access_road_good_condition_FS_COMMENT_DATE, transformer_leakage_ACTION, transformer_leakage_ACTION_DATE, transformer_leakage_FS_COMMENT, transformer_leakage_FS_COMMENT_DATE, used_part_oil_dump_ACTION, used_part_oil_dump_ACTION_DATE, used_part_oil_dump_FS_COMMENT, used_part_oil_dump_FS_COMMENT_DATE, visible_celtel_billboard_ACTION, visible_celtel_billboard_ACTION_DATE, visible_celtel_billboard_FS_COMMENT, visible_celtel_billboard_FS_COMMENT_DATE, ecg_mains_near_site_ACTION, ecg_mains_near_site_ACTION_DATE, ecg_mains_near_site_FS_COMMENT, ecg_mains_near_site_FS_COMMENT_DATE, signs_of_fuel_on_site_ACTION, signs_of_fuel_on_site_ACTION_DATE, signs_of_fuel_on_site_FS_COMMENT, signs_of_fuel_on_site_FS_COMMENT_DATE, closed_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, access_road_good_condition, access_road_good_condition_ACTION, access_road_good_condition_ACTION_DATE, access_road_good_condition_FS_COMMENT, access_road_good_condition_FS_COMMENT_DATE, transformer_leakage, transformer_leakage_ACTION, transformer_leakage_ACTION_DATE, transformer_leakage_FS_COMMENT, transformer_leakage_FS_COMMENT_DATE, used_part_oil_dump, used_part_oil_dump_ACTION, used_part_oil_dump_ACTION_DATE, used_part_oil_dump_FS_COMMENT, used_part_oil_dump_FS_COMMENT_DATE, visible_celtel_billboard, visible_celtel_billboard_ACTION, visible_celtel_billboard_ACTION_DATE, visible_celtel_billboard_FS_COMMENT, visible_celtel_billboard_FS_COMMENT_DATE, ecg_mains_near_site, ecg_mains_near_site_ACTION, ecg_mains_near_site_ACTION_DATE, ecg_mains_near_site_FS_COMMENT, ecg_mains_near_site_FS_COMMENT_DATE, signs_of_fuel_on_site, signs_of_fuel_on_site_ACTION, signs_of_fuel_on_site_ACTION_DATE, signs_of_fuel_on_site_FS_COMMENT, signs_of_fuel_on_site_FS_COMMENT_DATE, status, closed_date, closed_by', 'safe', 'on'=>'search'),
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
			'access_road_good_condition' => 'Access Road Good Condition',
			'access_road_good_condition_ACTION' => 'Access Road Good Condition Action',
			'access_road_good_condition_ACTION_DATE' => 'Access Road Good Condition Action Date',
			'access_road_good_condition_FS_COMMENT' => 'Access Road Good Condition Fs Comment',
			'access_road_good_condition_FS_COMMENT_DATE' => 'Access Road Good Condition Fs Comment Date',
			'transformer_leakage' => 'Transformer Leakage',
			'transformer_leakage_ACTION' => 'Transformer Leakage Action',
			'transformer_leakage_ACTION_DATE' => 'Transformer Leakage Action Date',
			'transformer_leakage_FS_COMMENT' => 'Transformer Leakage Fs Comment',
			'transformer_leakage_FS_COMMENT_DATE' => 'Transformer Leakage Fs Comment Date',
			'used_part_oil_dump' => 'Used Part Oil Dump',
			'used_part_oil_dump_ACTION' => 'Used Part Oil Dump Action',
			'used_part_oil_dump_ACTION_DATE' => 'Used Part Oil Dump Action Date',
			'used_part_oil_dump_FS_COMMENT' => 'Used Part Oil Dump Fs Comment',
			'used_part_oil_dump_FS_COMMENT_DATE' => 'Used Part Oil Dump Fs Comment Date',
			'visible_celtel_billboard' => 'Visible Celtel Billboard',
			'visible_celtel_billboard_ACTION' => 'Visible Celtel Billboard Action',
			'visible_celtel_billboard_ACTION_DATE' => 'Visible Celtel Billboard Action Date',
			'visible_celtel_billboard_FS_COMMENT' => 'Visible Celtel Billboard Fs Comment',
			'visible_celtel_billboard_FS_COMMENT_DATE' => 'Visible Celtel Billboard Fs Comment Date',
			'ecg_mains_near_site' => 'Ecg Mains Near Site',
			'ecg_mains_near_site_ACTION' => 'Ecg Mains Near Site Action',
			'ecg_mains_near_site_ACTION_DATE' => 'Ecg Mains Near Site Action Date',
			'ecg_mains_near_site_FS_COMMENT' => 'Ecg Mains Near Site Fs Comment',
			'ecg_mains_near_site_FS_COMMENT_DATE' => 'Ecg Mains Near Site Fs Comment Date',
			'signs_of_fuel_on_site' => 'Signs Of Fuel On Site',
			'signs_of_fuel_on_site_ACTION' => 'Signs Of Fuel On Site Action',
			'signs_of_fuel_on_site_ACTION_DATE' => 'Signs Of Fuel On Site Action Date',
			'signs_of_fuel_on_site_FS_COMMENT' => 'Signs Of Fuel On Site Fs Comment',
			'signs_of_fuel_on_site_FS_COMMENT_DATE' => 'Signs Of Fuel On Site Fs Comment Date',
			'status' => 'Status',
			'closed_date' => 'Closed Date',
			'closed_by' => 'Closed By',
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
		$criteria->compare('access_road_good_condition',$this->access_road_good_condition,true);
		$criteria->compare('access_road_good_condition_ACTION',$this->access_road_good_condition_ACTION,true);
		$criteria->compare('access_road_good_condition_ACTION_DATE',$this->access_road_good_condition_ACTION_DATE,true);
		$criteria->compare('access_road_good_condition_FS_COMMENT',$this->access_road_good_condition_FS_COMMENT,true);
		$criteria->compare('access_road_good_condition_FS_COMMENT_DATE',$this->access_road_good_condition_FS_COMMENT_DATE,true);
		$criteria->compare('transformer_leakage',$this->transformer_leakage,true);
		$criteria->compare('transformer_leakage_ACTION',$this->transformer_leakage_ACTION,true);
		$criteria->compare('transformer_leakage_ACTION_DATE',$this->transformer_leakage_ACTION_DATE,true);
		$criteria->compare('transformer_leakage_FS_COMMENT',$this->transformer_leakage_FS_COMMENT,true);
		$criteria->compare('transformer_leakage_FS_COMMENT_DATE',$this->transformer_leakage_FS_COMMENT_DATE,true);
		$criteria->compare('used_part_oil_dump',$this->used_part_oil_dump,true);
		$criteria->compare('used_part_oil_dump_ACTION',$this->used_part_oil_dump_ACTION,true);
		$criteria->compare('used_part_oil_dump_ACTION_DATE',$this->used_part_oil_dump_ACTION_DATE,true);
		$criteria->compare('used_part_oil_dump_FS_COMMENT',$this->used_part_oil_dump_FS_COMMENT,true);
		$criteria->compare('used_part_oil_dump_FS_COMMENT_DATE',$this->used_part_oil_dump_FS_COMMENT_DATE,true);
		$criteria->compare('visible_celtel_billboard',$this->visible_celtel_billboard,true);
		$criteria->compare('visible_celtel_billboard_ACTION',$this->visible_celtel_billboard_ACTION,true);
		$criteria->compare('visible_celtel_billboard_ACTION_DATE',$this->visible_celtel_billboard_ACTION_DATE,true);
		$criteria->compare('visible_celtel_billboard_FS_COMMENT',$this->visible_celtel_billboard_FS_COMMENT,true);
		$criteria->compare('visible_celtel_billboard_FS_COMMENT_DATE',$this->visible_celtel_billboard_FS_COMMENT_DATE,true);
		$criteria->compare('ecg_mains_near_site',$this->ecg_mains_near_site,true);
		$criteria->compare('ecg_mains_near_site_ACTION',$this->ecg_mains_near_site_ACTION,true);
		$criteria->compare('ecg_mains_near_site_ACTION_DATE',$this->ecg_mains_near_site_ACTION_DATE,true);
		$criteria->compare('ecg_mains_near_site_FS_COMMENT',$this->ecg_mains_near_site_FS_COMMENT,true);
		$criteria->compare('ecg_mains_near_site_FS_COMMENT_DATE',$this->ecg_mains_near_site_FS_COMMENT_DATE,true);
		$criteria->compare('signs_of_fuel_on_site',$this->signs_of_fuel_on_site,true);
		$criteria->compare('signs_of_fuel_on_site_ACTION',$this->signs_of_fuel_on_site_ACTION,true);
		$criteria->compare('signs_of_fuel_on_site_ACTION_DATE',$this->signs_of_fuel_on_site_ACTION_DATE,true);
		$criteria->compare('signs_of_fuel_on_site_FS_COMMENT',$this->signs_of_fuel_on_site_FS_COMMENT,true);
		$criteria->compare('signs_of_fuel_on_site_FS_COMMENT_DATE',$this->signs_of_fuel_on_site_FS_COMMENT_DATE,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('closed_date',$this->closed_date,true);
		$criteria->compare('closed_by',$this->closed_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Misc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
