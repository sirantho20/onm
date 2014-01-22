<?php

/**
 * This is the model class for table "vw_SiteDetails".
 *
 * The followings are the available columns in table 'vw_SiteDetails':
 * @property string $site_id
 * @property string $site_name
 * @property string $city_town
 * @property string $region
 * @property string $htg_office_allocation
 * @property string $htg_field_supervisor
 * @property integer $fs_contact_number
 * @property string $maintenance_contractor
 * @property string $fumigation_contractor
 * @property string $security_contractor
 * @property string $security_type
 * @property string $site_phone_number
 * @property string $fencing_type
 * @property string $guard_house
 * @property string $access_road
 */
class SiteDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vw_SiteDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, site_name, region', 'required'),
			array('fs_contact_number', 'numerical', 'integerOnly'=>true),
			array('site_id, site_name, city_town, region, htg_office_allocation, htg_field_supervisor, maintenance_contractor, fumigation_contractor, security_contractor, security_type, site_phone_number, fencing_type, guard_house, access_road', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('site_id, site_name, city_town, region, htg_office_allocation, htg_field_supervisor, fs_contact_number, maintenance_contractor, fumigation_contractor, security_contractor, security_type, site_phone_number, fencing_type, guard_house, access_road', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'site_id' => 'Site',
			'site_name' => 'Site Name',
			'city_town' => 'City Town',
			'region' => 'Region',
			'htg_office_allocation' => 'Htg Office Allocation',
			'htg_field_supervisor' => 'Htg Field Supervisor',
			'fs_contact_number' => 'Fs Contact Number',
			'maintenance_contractor' => 'Maintenance Contractor',
			'fumigation_contractor' => 'Fumigation Contractor',
			'security_contractor' => 'Security Contractor',
			'security_type' => 'Security Type',
			'site_phone_number' => 'Site Phone Number',
			'fencing_type' => 'Fencing Type',
			'guard_house' => 'Guard House',
			'access_road' => 'Access Road',
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

		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('site_name',$this->site_name,true);
		$criteria->compare('city_town',$this->city_town,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('htg_office_allocation',$this->htg_office_allocation,true);
		$criteria->compare('htg_field_supervisor',$this->htg_field_supervisor,true);
		$criteria->compare('fs_contact_number',$this->fs_contact_number);
		$criteria->compare('maintenance_contractor',$this->maintenance_contractor,true);
		$criteria->compare('fumigation_contractor',$this->fumigation_contractor,true);
		$criteria->compare('security_contractor',$this->security_contractor,true);
		$criteria->compare('security_type',$this->security_type,true);
		$criteria->compare('site_phone_number',$this->site_phone_number,true);
		$criteria->compare('fencing_type',$this->fencing_type,true);
		$criteria->compare('guard_house',$this->guard_house,true);
		$criteria->compare('access_road',$this->access_road,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SiteDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getSiteIDList()
        {
            $model = SiteDetails::model()->findAll();
            return CHtml::listData($model, 'site_id', 'site_name');
        }
}
