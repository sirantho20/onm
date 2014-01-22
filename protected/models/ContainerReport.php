<?php

/**
 * This is the model class for table "container_report".
 *
 * The followings are the available columns in table 'container_report':
 * @property integer $id
 * @property integer $report_id
 * @property string $door_locking_working
 * @property string $door_locking_working_ACTION
 * @property string $door_locking_working_ACTION_DATE
 * @property string $door_locking_working_FS_COMMENT
 * @property string $external_security_light_working
 * @property string $external_security_light_working_ACTION
 * @property string $external_security_light_working_ACTION_DATE
 * @property string $external_security_light_working_FS_COMMENT
 * @property string $internal_lights_wall_sockets_working
 * @property string $internal_lights_wall_sockets_working_ACTION
 * @property string $internal_lights_wall_sockets_working_ACTION_DATE
 * @property string $internal_lights_wall_sockets_working_FS_COMMENT
 * @property string $fire_extinguisher_on_site
 * @property string $fire_extinguisher_on_site_ACTION
 * @property string $fire_extinguisher_on_site_ACTION_DATE
 * @property string $fire_extinguisher_on_site_FS_COMMENT
 * @property string $inside_container_neat_tidy
 * @property string $inside_container_neat_tidy_ACTION
 * @property string $inside_container_neat_tidy_ACTION_DATE
 * @property string $inside_container_neat_tidy_FS_COMMENT
 * @property string $water_insect_intering_container
 * @property string $water_insect_intering_container_ACTION
 * @property string $water_insect_intering_container_ACTION_DATE
 * @property string $water_insect_intering_container_FS_COMMENT
 * @property string $site_log_book_in_container
 * @property string $site_log_book_in_container_ACTION
 * @property string $site_log_book_in_container_ACTION_DATE
 * @property string $site_log_book_in_container_FS_COMMENT
 * @property string $ac_units_working_correctly
 * @property string $ac_units_working_correctly_ACTION
 * @property string $ac_units_working_correctly_ACTION_DATE
 * @property string $ac_units_working_correctly_FS_COMMENT
 * @property string $ac_serviced
 * @property string $ac_serviced_ACTION
 * @property string $ac_serviced_ACTION_DATE
 * @property string $ac_serviced_FS_COMMENT
 * @property string $ac_serviced_DATE
 * @property string $ac_air_filter_clean
 * @property string $ac_air_filter_clean_ACTION
 * @property string $ac_air_filter_clean_ACTION_DATE
 * @property string $ac_air_filter_clean_FS_COMMENT
 * @property string $bts_internal_external_alarms
 * @property string $bts_internal_external_alarms_ACTION
 * @property string $bts_internal_external_alarms_ACTION_DATE
 * @property string $bts_internal_external_alarms_FS_COMMENT
 * @property string $bts_cooling_fans_working
 * @property string $bts_cooling_fans_working_ACTION
 * @property string $bts_cooling_fans_working_ACTION_DATE
 * @property string $bts_cooling_fans_working_FS_COMMENT
 * @property string $rectifier_alarms
 * @property string $rectifier_alarms_ACTION
 * @property string $rectifier_alarms_ACTION_DATE
 * @property string $rectifier_alarms_FS_COMMENT
 * @property string $batteries_ok
 * @property string $batteries_ok_ACTION
 * @property string $batteries_ok_ACTION_DATE
 * @property string $batteries_ok_FS_COMMENT
 * @property string $breaker_tripped_in_mains_db_box
 * @property string $breaker_tripped_in_mains_db_box_ACTION
 * @property string $breaker_tripped_in_mains_db_box_ACTION_DATE
 * @property string $breaker_tripped_in_mains_db_box_FS_COMMENT
 * @property string $installation_works_since_last_visit
 * @property string $installation_works_since_last_visit_FS_COMMENT
 * @property string $door_locking_working_FS_COMMENT_DATE
 * @property string $external_security_light_working_FS_COMMENT_DATE
 * @property string $internal_lights_wall_sockets_working_FS_COMMENT_DATE
 * @property string $fire_extinguisher_on_site_FS_COMMENT_DATE
 * @property string $inside_container_neat_tidy_FS_COMMENT_DATE
 * @property string $water_insect_intering_container_FS_COMMENT_DATE
 * @property string $site_log_book_in_container_FS_COMMENT_DATE
 * @property string $ac_units_working_correctly_FS_COMMENT_DATE
 * @property string $ac_serviced_FS_COMMENT_DATE
 * @property string $ac_air_filter_clean_FS_COMMENT_DATE
 * @property string $bts_internal_external_alarms_FS_COMMENT_DATE
 * @property string $rectifier_alarms_FS_COMMENT_DATE
 * @property string $batteries_ok_FS_COMMENT_DATE
 * @property string $breaker_tripped_in_mains_db_box_FS_COMMENT_DATE
 * @property string $installation_works_since_last_visit_FS_COMMENT_DATE
 * @property string $status
 * @property string $closed_date
 * @property string $closed_by
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class ContainerReport extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'container_report';
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
			array('door_locking_working, external_security_light_working, internal_lights_wall_sockets_working, fire_extinguisher_on_site, inside_container_neat_tidy, water_insect_intering_container, site_log_book_in_container, ac_units_working_correctly, ac_serviced, ac_air_filter_clean, bts_internal_external_alarms, bts_cooling_fans_working, rectifier_alarms, batteries_ok, breaker_tripped_in_mains_db_box, installation_works_since_last_visit', 'length', 'max'=>1),
			array('ac_serviced_FS_COMMENT', 'length', 'max'=>10),
			array('status, closed_by', 'length', 'max'=>50),
			array('door_locking_working_ACTION, door_locking_working_ACTION_DATE, door_locking_working_FS_COMMENT, external_security_light_working_ACTION, external_security_light_working_ACTION_DATE, external_security_light_working_FS_COMMENT, internal_lights_wall_sockets_working_ACTION, internal_lights_wall_sockets_working_ACTION_DATE, internal_lights_wall_sockets_working_FS_COMMENT, fire_extinguisher_on_site_ACTION, fire_extinguisher_on_site_ACTION_DATE, fire_extinguisher_on_site_FS_COMMENT, inside_container_neat_tidy_ACTION, inside_container_neat_tidy_ACTION_DATE, inside_container_neat_tidy_FS_COMMENT, water_insect_intering_container_ACTION, water_insect_intering_container_ACTION_DATE, water_insect_intering_container_FS_COMMENT, site_log_book_in_container_ACTION, site_log_book_in_container_ACTION_DATE, site_log_book_in_container_FS_COMMENT, ac_units_working_correctly_ACTION, ac_units_working_correctly_ACTION_DATE, ac_units_working_correctly_FS_COMMENT, ac_serviced_ACTION, ac_serviced_ACTION_DATE, ac_serviced_DATE, ac_air_filter_clean_ACTION, ac_air_filter_clean_ACTION_DATE, ac_air_filter_clean_FS_COMMENT, bts_internal_external_alarms_ACTION, bts_internal_external_alarms_ACTION_DATE, bts_internal_external_alarms_FS_COMMENT, bts_cooling_fans_working_ACTION, bts_cooling_fans_working_ACTION_DATE, bts_cooling_fans_working_FS_COMMENT, rectifier_alarms_ACTION, rectifier_alarms_ACTION_DATE, rectifier_alarms_FS_COMMENT, batteries_ok_ACTION, batteries_ok_ACTION_DATE, batteries_ok_FS_COMMENT, breaker_tripped_in_mains_db_box_ACTION, breaker_tripped_in_mains_db_box_ACTION_DATE, breaker_tripped_in_mains_db_box_FS_COMMENT, installation_works_since_last_visit_FS_COMMENT, door_locking_working_FS_COMMENT_DATE, external_security_light_working_FS_COMMENT_DATE, internal_lights_wall_sockets_working_FS_COMMENT_DATE, fire_extinguisher_on_site_FS_COMMENT_DATE, inside_container_neat_tidy_FS_COMMENT_DATE, water_insect_intering_container_FS_COMMENT_DATE, site_log_book_in_container_FS_COMMENT_DATE, ac_units_working_correctly_FS_COMMENT_DATE, ac_serviced_FS_COMMENT_DATE, ac_air_filter_clean_FS_COMMENT_DATE, bts_internal_external_alarms_FS_COMMENT_DATE, rectifier_alarms_FS_COMMENT_DATE, batteries_ok_FS_COMMENT_DATE, breaker_tripped_in_mains_db_box_FS_COMMENT_DATE, installation_works_since_last_visit_FS_COMMENT_DATE, closed_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, door_locking_working, door_locking_working_ACTION, door_locking_working_ACTION_DATE, door_locking_working_FS_COMMENT, external_security_light_working, external_security_light_working_ACTION, external_security_light_working_ACTION_DATE, external_security_light_working_FS_COMMENT, internal_lights_wall_sockets_working, internal_lights_wall_sockets_working_ACTION, internal_lights_wall_sockets_working_ACTION_DATE, internal_lights_wall_sockets_working_FS_COMMENT, fire_extinguisher_on_site, fire_extinguisher_on_site_ACTION, fire_extinguisher_on_site_ACTION_DATE, fire_extinguisher_on_site_FS_COMMENT, inside_container_neat_tidy, inside_container_neat_tidy_ACTION, inside_container_neat_tidy_ACTION_DATE, inside_container_neat_tidy_FS_COMMENT, water_insect_intering_container, water_insect_intering_container_ACTION, water_insect_intering_container_ACTION_DATE, water_insect_intering_container_FS_COMMENT, site_log_book_in_container, site_log_book_in_container_ACTION, site_log_book_in_container_ACTION_DATE, site_log_book_in_container_FS_COMMENT, ac_units_working_correctly, ac_units_working_correctly_ACTION, ac_units_working_correctly_ACTION_DATE, ac_units_working_correctly_FS_COMMENT, ac_serviced, ac_serviced_ACTION, ac_serviced_ACTION_DATE, ac_serviced_FS_COMMENT, ac_serviced_DATE, ac_air_filter_clean, ac_air_filter_clean_ACTION, ac_air_filter_clean_ACTION_DATE, ac_air_filter_clean_FS_COMMENT, bts_internal_external_alarms, bts_internal_external_alarms_ACTION, bts_internal_external_alarms_ACTION_DATE, bts_internal_external_alarms_FS_COMMENT, bts_cooling_fans_working, bts_cooling_fans_working_ACTION, bts_cooling_fans_working_ACTION_DATE, bts_cooling_fans_working_FS_COMMENT, rectifier_alarms, rectifier_alarms_ACTION, rectifier_alarms_ACTION_DATE, rectifier_alarms_FS_COMMENT, batteries_ok, batteries_ok_ACTION, batteries_ok_ACTION_DATE, batteries_ok_FS_COMMENT, breaker_tripped_in_mains_db_box, breaker_tripped_in_mains_db_box_ACTION, breaker_tripped_in_mains_db_box_ACTION_DATE, breaker_tripped_in_mains_db_box_FS_COMMENT, installation_works_since_last_visit, installation_works_since_last_visit_FS_COMMENT, door_locking_working_FS_COMMENT_DATE, external_security_light_working_FS_COMMENT_DATE, internal_lights_wall_sockets_working_FS_COMMENT_DATE, fire_extinguisher_on_site_FS_COMMENT_DATE, inside_container_neat_tidy_FS_COMMENT_DATE, water_insect_intering_container_FS_COMMENT_DATE, site_log_book_in_container_FS_COMMENT_DATE, ac_units_working_correctly_FS_COMMENT_DATE, ac_serviced_FS_COMMENT_DATE, ac_air_filter_clean_FS_COMMENT_DATE, bts_internal_external_alarms_FS_COMMENT_DATE, rectifier_alarms_FS_COMMENT_DATE, batteries_ok_FS_COMMENT_DATE, breaker_tripped_in_mains_db_box_FS_COMMENT_DATE, installation_works_since_last_visit_FS_COMMENT_DATE, status, closed_date, closed_by', 'safe', 'on'=>'search'),
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
			'door_locking_working' => 'Is the door locking mechanism working?',
			'door_locking_working_ACTION' => 'Action',
			'door_locking_working_ACTION_DATE' => 'Action Date',
			'door_locking_working_FS_COMMENT' => 'Door Locking Working Fs Comment',
			'external_security_light_working' => 'Is the external security light working?',
			'external_security_light_working_ACTION' => 'Action',
			'external_security_light_working_ACTION_DATE' => 'Action Date',
			'external_security_light_working_FS_COMMENT' => 'External Security Light Working Fs Comment',
			'internal_lights_wall_sockets_working' => 'Are the internal lights and wall sockets working?',
			'internal_lights_wall_sockets_working_ACTION' => 'Action',
			'internal_lights_wall_sockets_working_ACTION_DATE' => 'Action Date',
			'internal_lights_wall_sockets_working_FS_COMMENT' => 'Internal Lights Wall Sockets Working Fs Comment',
			'fire_extinguisher_on_site' => 'Is there a fire extinguisher on site?',
			'fire_extinguisher_on_site_ACTION' => 'Action',
			'fire_extinguisher_on_site_ACTION_DATE' => 'Action Date',
			'fire_extinguisher_on_site_FS_COMMENT' => 'Fire Extinguisher On Site Fs Comment',
			'inside_container_neat_tidy' => 'Is the inside of the Container neat and tidy?',
			'inside_container_neat_tidy_ACTION' => 'Action',
			'inside_container_neat_tidy_ACTION_DATE' => 'Action Date',
			'inside_container_neat_tidy_FS_COMMENT' => 'Inside Container Neat Tidy Fs Comment',
			'water_insect_intering_container' => 'Are there any signs of water or insects enetring the container?',
			'water_insect_intering_container_ACTION' => 'Action',
			'water_insect_intering_container_ACTION_DATE' => 'Action Date',
			'water_insect_intering_container_FS_COMMENT' => 'Water Insect Intering Container Fs Comment',
			'site_log_book_in_container' => 'Is there a site log book in the container?',
			'site_log_book_in_container_ACTION' => 'Action',
			'site_log_book_in_container_ACTION_DATE' => 'Action Date',
			'site_log_book_in_container_FS_COMMENT' => 'Site Log Book In Container Fs Comment',
			'ac_units_working_correctly' => 'Are the A/Cs functioning correctly, check both units?',
			'ac_units_working_correctly_ACTION' => 'Action',
			'ac_units_working_correctly_ACTION_DATE' => 'Action Date',
			'ac_units_working_correctly_FS_COMMENT' => 'Ac Units Working Correctly Fs Comment',
			'ac_serviced' => 'Have the A/Cs been serviced?',
			'ac_serviced_ACTION' => 'Action',
			'ac_serviced_ACTION_DATE' => 'Action Date',
			'ac_serviced_FS_COMMENT' => 'Ac Serviced Fs Comment',
			'ac_serviced_DATE' => 'AC Serviced Date',
			'ac_air_filter_clean' => 'Are the A/Cs air filters clean?',
			'ac_air_filter_clean_ACTION' => 'Action',
			'ac_air_filter_clean_ACTION_DATE' => 'Action Date',
			'ac_air_filter_clean_FS_COMMENT' => 'Ac Air Filter Clean Fs Comment',
			'bts_internal_external_alarms' => 'Are there any alarms on the BTS, internal & external?',
			'bts_internal_external_alarms_ACTION' => 'Action',
			'bts_internal_external_alarms_ACTION_DATE' => 'Bts Internal External Alarms Action Date',
			'bts_internal_external_alarms_FS_COMMENT' => 'Bts Internal External Alarms Fs Comment',
			'bts_cooling_fans_working' => 'Bts Cooling Fans Working',
			'bts_cooling_fans_working_ACTION' => 'Bts Cooling Fans Working Action',
			'bts_cooling_fans_working_ACTION_DATE' => 'Bts Cooling Fans Working Action Date',
			'bts_cooling_fans_working_FS_COMMENT' => 'Bts Cooling Fans Working Fs Comment',
			'rectifier_alarms' => 'Rectifier Alarms',
			'rectifier_alarms_ACTION' => 'Rectifier Alarms Action',
			'rectifier_alarms_ACTION_DATE' => 'Rectifier Alarms Action Date',
			'rectifier_alarms_FS_COMMENT' => 'Rectifier Alarms Fs Comment',
			'batteries_ok' => 'Batteries Ok',
			'batteries_ok_ACTION' => 'Batteries Ok Action',
			'batteries_ok_ACTION_DATE' => 'Batteries Ok Action Date',
			'batteries_ok_FS_COMMENT' => 'Batteries Ok Fs Comment',
			'breaker_tripped_in_mains_db_box' => 'Breaker Tripped In Mains Db Box',
			'breaker_tripped_in_mains_db_box_ACTION' => 'Breaker Tripped In Mains Db Box Action',
			'breaker_tripped_in_mains_db_box_ACTION_DATE' => 'Breaker Tripped In Mains Db Box Action Date',
			'breaker_tripped_in_mains_db_box_FS_COMMENT' => 'Breaker Tripped In Mains Db Box Fs Comment',
			'installation_works_since_last_visit' => 'Installation Works Since Last Visit',
			'installation_works_since_last_visit_FS_COMMENT' => 'Installation Works Since Last Visit Fs Comment',
			'door_locking_working_FS_COMMENT_DATE' => 'Door Locking Working Fs Comment Date',
			'external_security_light_working_FS_COMMENT_DATE' => 'External Security Light Working Fs Comment Date',
			'internal_lights_wall_sockets_working_FS_COMMENT_DATE' => 'Internal Lights Wall Sockets Working Fs Comment Date',
			'fire_extinguisher_on_site_FS_COMMENT_DATE' => 'Fire Extinguisher On Site Fs Comment Date',
			'inside_container_neat_tidy_FS_COMMENT_DATE' => 'Inside Container Neat Tidy Fs Comment Date',
			'water_insect_intering_container_FS_COMMENT_DATE' => 'Water Insect Intering Container Fs Comment Date',
			'site_log_book_in_container_FS_COMMENT_DATE' => 'Site Log Book In Container Fs Comment Date',
			'ac_units_working_correctly_FS_COMMENT_DATE' => 'Ac Units Working Correctly Fs Comment Date',
			'ac_serviced_FS_COMMENT_DATE' => 'Ac Serviced Fs Comment Date',
			'ac_air_filter_clean_FS_COMMENT_DATE' => 'Ac Air Filter Clean Fs Comment Date',
			'bts_internal_external_alarms_FS_COMMENT_DATE' => 'Bts Internal External Alarms Fs Comment Date',
			'rectifier_alarms_FS_COMMENT_DATE' => 'Rectifier Alarms Fs Comment Date',
			'batteries_ok_FS_COMMENT_DATE' => 'Batteries Ok Fs Comment Date',
			'breaker_tripped_in_mains_db_box_FS_COMMENT_DATE' => 'Breaker Tripped In Mains Db Box Fs Comment Date',
			'installation_works_since_last_visit_FS_COMMENT_DATE' => 'Installation Works Since Last Visit Fs Comment Date',
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
		$criteria->compare('door_locking_working',$this->door_locking_working,true);
		$criteria->compare('door_locking_working_ACTION',$this->door_locking_working_ACTION,true);
		$criteria->compare('door_locking_working_ACTION_DATE',$this->door_locking_working_ACTION_DATE,true);
		$criteria->compare('door_locking_working_FS_COMMENT',$this->door_locking_working_FS_COMMENT,true);
		$criteria->compare('external_security_light_working',$this->external_security_light_working,true);
		$criteria->compare('external_security_light_working_ACTION',$this->external_security_light_working_ACTION,true);
		$criteria->compare('external_security_light_working_ACTION_DATE',$this->external_security_light_working_ACTION_DATE,true);
		$criteria->compare('external_security_light_working_FS_COMMENT',$this->external_security_light_working_FS_COMMENT,true);
		$criteria->compare('internal_lights_wall_sockets_working',$this->internal_lights_wall_sockets_working,true);
		$criteria->compare('internal_lights_wall_sockets_working_ACTION',$this->internal_lights_wall_sockets_working_ACTION,true);
		$criteria->compare('internal_lights_wall_sockets_working_ACTION_DATE',$this->internal_lights_wall_sockets_working_ACTION_DATE,true);
		$criteria->compare('internal_lights_wall_sockets_working_FS_COMMENT',$this->internal_lights_wall_sockets_working_FS_COMMENT,true);
		$criteria->compare('fire_extinguisher_on_site',$this->fire_extinguisher_on_site,true);
		$criteria->compare('fire_extinguisher_on_site_ACTION',$this->fire_extinguisher_on_site_ACTION,true);
		$criteria->compare('fire_extinguisher_on_site_ACTION_DATE',$this->fire_extinguisher_on_site_ACTION_DATE,true);
		$criteria->compare('fire_extinguisher_on_site_FS_COMMENT',$this->fire_extinguisher_on_site_FS_COMMENT,true);
		$criteria->compare('inside_container_neat_tidy',$this->inside_container_neat_tidy,true);
		$criteria->compare('inside_container_neat_tidy_ACTION',$this->inside_container_neat_tidy_ACTION,true);
		$criteria->compare('inside_container_neat_tidy_ACTION_DATE',$this->inside_container_neat_tidy_ACTION_DATE,true);
		$criteria->compare('inside_container_neat_tidy_FS_COMMENT',$this->inside_container_neat_tidy_FS_COMMENT,true);
		$criteria->compare('water_insect_intering_container',$this->water_insect_intering_container,true);
		$criteria->compare('water_insect_intering_container_ACTION',$this->water_insect_intering_container_ACTION,true);
		$criteria->compare('water_insect_intering_container_ACTION_DATE',$this->water_insect_intering_container_ACTION_DATE,true);
		$criteria->compare('water_insect_intering_container_FS_COMMENT',$this->water_insect_intering_container_FS_COMMENT,true);
		$criteria->compare('site_log_book_in_container',$this->site_log_book_in_container,true);
		$criteria->compare('site_log_book_in_container_ACTION',$this->site_log_book_in_container_ACTION,true);
		$criteria->compare('site_log_book_in_container_ACTION_DATE',$this->site_log_book_in_container_ACTION_DATE,true);
		$criteria->compare('site_log_book_in_container_FS_COMMENT',$this->site_log_book_in_container_FS_COMMENT,true);
		$criteria->compare('ac_units_working_correctly',$this->ac_units_working_correctly,true);
		$criteria->compare('ac_units_working_correctly_ACTION',$this->ac_units_working_correctly_ACTION,true);
		$criteria->compare('ac_units_working_correctly_ACTION_DATE',$this->ac_units_working_correctly_ACTION_DATE,true);
		$criteria->compare('ac_units_working_correctly_FS_COMMENT',$this->ac_units_working_correctly_FS_COMMENT,true);
		$criteria->compare('ac_serviced',$this->ac_serviced,true);
		$criteria->compare('ac_serviced_ACTION',$this->ac_serviced_ACTION,true);
		$criteria->compare('ac_serviced_ACTION_DATE',$this->ac_serviced_ACTION_DATE,true);
		$criteria->compare('ac_serviced_FS_COMMENT',$this->ac_serviced_FS_COMMENT,true);
		$criteria->compare('ac_serviced_DATE',$this->ac_serviced_DATE,true);
		$criteria->compare('ac_air_filter_clean',$this->ac_air_filter_clean,true);
		$criteria->compare('ac_air_filter_clean_ACTION',$this->ac_air_filter_clean_ACTION,true);
		$criteria->compare('ac_air_filter_clean_ACTION_DATE',$this->ac_air_filter_clean_ACTION_DATE,true);
		$criteria->compare('ac_air_filter_clean_FS_COMMENT',$this->ac_air_filter_clean_FS_COMMENT,true);
		$criteria->compare('bts_internal_external_alarms',$this->bts_internal_external_alarms,true);
		$criteria->compare('bts_internal_external_alarms_ACTION',$this->bts_internal_external_alarms_ACTION,true);
		$criteria->compare('bts_internal_external_alarms_ACTION_DATE',$this->bts_internal_external_alarms_ACTION_DATE,true);
		$criteria->compare('bts_internal_external_alarms_FS_COMMENT',$this->bts_internal_external_alarms_FS_COMMENT,true);
		$criteria->compare('bts_cooling_fans_working',$this->bts_cooling_fans_working,true);
		$criteria->compare('bts_cooling_fans_working_ACTION',$this->bts_cooling_fans_working_ACTION,true);
		$criteria->compare('bts_cooling_fans_working_ACTION_DATE',$this->bts_cooling_fans_working_ACTION_DATE,true);
		$criteria->compare('bts_cooling_fans_working_FS_COMMENT',$this->bts_cooling_fans_working_FS_COMMENT,true);
		$criteria->compare('rectifier_alarms',$this->rectifier_alarms,true);
		$criteria->compare('rectifier_alarms_ACTION',$this->rectifier_alarms_ACTION,true);
		$criteria->compare('rectifier_alarms_ACTION_DATE',$this->rectifier_alarms_ACTION_DATE,true);
		$criteria->compare('rectifier_alarms_FS_COMMENT',$this->rectifier_alarms_FS_COMMENT,true);
		$criteria->compare('batteries_ok',$this->batteries_ok,true);
		$criteria->compare('batteries_ok_ACTION',$this->batteries_ok_ACTION,true);
		$criteria->compare('batteries_ok_ACTION_DATE',$this->batteries_ok_ACTION_DATE,true);
		$criteria->compare('batteries_ok_FS_COMMENT',$this->batteries_ok_FS_COMMENT,true);
		$criteria->compare('breaker_tripped_in_mains_db_box',$this->breaker_tripped_in_mains_db_box,true);
		$criteria->compare('breaker_tripped_in_mains_db_box_ACTION',$this->breaker_tripped_in_mains_db_box_ACTION,true);
		$criteria->compare('breaker_tripped_in_mains_db_box_ACTION_DATE',$this->breaker_tripped_in_mains_db_box_ACTION_DATE,true);
		$criteria->compare('breaker_tripped_in_mains_db_box_FS_COMMENT',$this->breaker_tripped_in_mains_db_box_FS_COMMENT,true);
		$criteria->compare('installation_works_since_last_visit',$this->installation_works_since_last_visit,true);
		$criteria->compare('installation_works_since_last_visit_FS_COMMENT',$this->installation_works_since_last_visit_FS_COMMENT,true);
		$criteria->compare('door_locking_working_FS_COMMENT_DATE',$this->door_locking_working_FS_COMMENT_DATE,true);
		$criteria->compare('external_security_light_working_FS_COMMENT_DATE',$this->external_security_light_working_FS_COMMENT_DATE,true);
		$criteria->compare('internal_lights_wall_sockets_working_FS_COMMENT_DATE',$this->internal_lights_wall_sockets_working_FS_COMMENT_DATE,true);
		$criteria->compare('fire_extinguisher_on_site_FS_COMMENT_DATE',$this->fire_extinguisher_on_site_FS_COMMENT_DATE,true);
		$criteria->compare('inside_container_neat_tidy_FS_COMMENT_DATE',$this->inside_container_neat_tidy_FS_COMMENT_DATE,true);
		$criteria->compare('water_insect_intering_container_FS_COMMENT_DATE',$this->water_insect_intering_container_FS_COMMENT_DATE,true);
		$criteria->compare('site_log_book_in_container_FS_COMMENT_DATE',$this->site_log_book_in_container_FS_COMMENT_DATE,true);
		$criteria->compare('ac_units_working_correctly_FS_COMMENT_DATE',$this->ac_units_working_correctly_FS_COMMENT_DATE,true);
		$criteria->compare('ac_serviced_FS_COMMENT_DATE',$this->ac_serviced_FS_COMMENT_DATE,true);
		$criteria->compare('ac_air_filter_clean_FS_COMMENT_DATE',$this->ac_air_filter_clean_FS_COMMENT_DATE,true);
		$criteria->compare('bts_internal_external_alarms_FS_COMMENT_DATE',$this->bts_internal_external_alarms_FS_COMMENT_DATE,true);
		$criteria->compare('rectifier_alarms_FS_COMMENT_DATE',$this->rectifier_alarms_FS_COMMENT_DATE,true);
		$criteria->compare('batteries_ok_FS_COMMENT_DATE',$this->batteries_ok_FS_COMMENT_DATE,true);
		$criteria->compare('breaker_tripped_in_mains_db_box_FS_COMMENT_DATE',$this->breaker_tripped_in_mains_db_box_FS_COMMENT_DATE,true);
		$criteria->compare('installation_works_since_last_visit_FS_COMMENT_DATE',$this->installation_works_since_last_visit_FS_COMMENT_DATE,true);
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
	 * @return ContainerReport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function raiseIssue()
        {
            $attr = $this->attributes;
            
            foreach ( $attr as $topic=>$value)
            {
                
            }
        }
}
