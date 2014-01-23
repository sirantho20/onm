<?php

/**
 * This is the model class for table "genset_report".
 *
 * The followings are the available columns in table 'genset_report':
 * @property integer $id
 * @property integer $report_id
 * @property string $genset_canopy_clean_tidy
 * @property string $genset_canopy_clean_tidy_ACTION
 * @property string $genset_canopy_clean_tidy_ACTION_DATE
 * @property string $genset_canopy_clean_tidy_FS_COMMENT
 * @property string $padlocks_on_all_doors
 * @property string $padlocks_on_all_doors_ACTION
 * @property string $padlocks_on_all_doors_ACTION_DATE
 * @property string $padlocks_on_all_doors_FS_COMMENT
 * @property string $ats_panel_alarms
 * @property string $ats_panel_alarms_ACTION
 * @property string $ats_panel_alarms_ACTION_DATE
 * @property string $ats_panel_alarms_FS_COMMENT
 * @property string $noice_level
 * @property string $genset_serviced
 * @property string $genset_serviced_ACTION
 * @property string $genset_serviced_ACTION_DATE
 * @property string $genset_serviced_FS_COMMENT
 * @property string $genset_serviced_date
 * @property string $genset_service_tag_with_previous_data
 * @property string $next_service_date
 * @property string $water_fuel_level_ok
 * @property string $water_fuel_level_ok_ACTION
 * @property string $water_fuel_level_ok_ACTION_DATE
 * @property string $water_fuel_level_ok_FS_COMMENT
 * @property string $fuel_level
 * @property string $double_genset_automation_working
 * @property string $double_genset_automation_working_ACTION
 * @property string $double_genset_automation_working_ACTION_DATE
 * @property string $double_genset_automation_working_FS_COMMENT
 * @property string $test_auto_start_by_switching_off_mains
 * @property string $test_auto_start_by_switching_off_mains_ACTION
 * @property string $test_auto_start_by_switching_off_mains_ACTION_DATE
 * @property string $test_auto_start_by_switching_off_mains_FS_COMMENT
 * @property string $kva_running_load
 * @property string $exhaust_system_broken_noisy_lagging
 * @property string $exhaust_system_broken_noisy_lagging_ACTION
 * @property string $exhaust_system_broken_noisy_lagging_ACTION_DATE
 * @property string $exhaust_system_broken_noisy_lagging_FS_COMMENT
 * @property string $check_engine_cranking_battery_water_cables
 * @property string $check_engine_cranking_battery_water_cables_ACTION
 * @property string $check_engine_cranking_battery_water_cables_ACTION_DATE
 * @property string $check_engine_cranking_battery_water_cables_FS_COMMENT
 * @property string $fuel_theft_leakage
 * @property string $fuel_theft_leakage_ACTION
 * @property string $fuel_theft_leakage_ACTION_DATE
 * @property string $fuel_theft_leakage_FS_COMMENT
 * @property string $genset_canopy_clean_tidy_FS_COMMENT_DATE
 * @property string $padlocks_on_all_doors_FS_COMMENT_DATE
 * @property string $ats_panel_alarms_FS_COMMENT_DATE
 * @property string $genset_serviced_FS_COMMENT_DATE
 * @property string $water_fuel_level_ok_FS_COMMENT_DATE
 * @property string $double_genset_automation_working_FS_COMMENT_DATE
 * @property string $test_auto_start_by_switching_off_mains_FS_COMMENT_DATE
 * @property string $exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE
 * @property string $check_engine_cranking_battery_water_cables_FS_COMMENT_DATE
 * @property string $fuel_theft_leakage_FS_COMMENT_DATE
 * @property string $status
 * @property string $closed_date
 * @property string $closed_by
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class GensetReport extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'genset_report';
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
			array('genset_canopy_clean_tidy, padlocks_on_all_doors, ats_panel_alarms, genset_serviced, genset_service_tag_with_previous_data, water_fuel_level_ok, double_genset_automation_working, test_auto_start_by_switching_off_mains, exhaust_system_broken_noisy_lagging, check_engine_cranking_battery_water_cables, fuel_theft_leakage', 'length', 'max'=>1),
			array('noice_level, status, closed_by', 'length', 'max'=>50),
			array('fuel_level, kva_running_load', 'length', 'max'=>18),
			array('genset_canopy_clean_tidy_ACTION, genset_canopy_clean_tidy_ACTION_DATE, genset_canopy_clean_tidy_FS_COMMENT, padlocks_on_all_doors_ACTION, padlocks_on_all_doors_ACTION_DATE, padlocks_on_all_doors_FS_COMMENT, ats_panel_alarms_ACTION, ats_panel_alarms_ACTION_DATE, ats_panel_alarms_FS_COMMENT, genset_serviced_ACTION, genset_serviced_ACTION_DATE, genset_serviced_FS_COMMENT, genset_serviced_date, next_service_date, water_fuel_level_ok_ACTION, water_fuel_level_ok_ACTION_DATE, water_fuel_level_ok_FS_COMMENT, double_genset_automation_working_ACTION, double_genset_automation_working_ACTION_DATE, double_genset_automation_working_FS_COMMENT, test_auto_start_by_switching_off_mains_ACTION, test_auto_start_by_switching_off_mains_ACTION_DATE, test_auto_start_by_switching_off_mains_FS_COMMENT, exhaust_system_broken_noisy_lagging_ACTION, exhaust_system_broken_noisy_lagging_ACTION_DATE, exhaust_system_broken_noisy_lagging_FS_COMMENT, check_engine_cranking_battery_water_cables_ACTION, check_engine_cranking_battery_water_cables_ACTION_DATE, check_engine_cranking_battery_water_cables_FS_COMMENT, fuel_theft_leakage_ACTION, fuel_theft_leakage_ACTION_DATE, fuel_theft_leakage_FS_COMMENT, genset_canopy_clean_tidy_FS_COMMENT_DATE, padlocks_on_all_doors_FS_COMMENT_DATE, ats_panel_alarms_FS_COMMENT_DATE, genset_serviced_FS_COMMENT_DATE, water_fuel_level_ok_FS_COMMENT_DATE, double_genset_automation_working_FS_COMMENT_DATE, test_auto_start_by_switching_off_mains_FS_COMMENT_DATE, exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE, check_engine_cranking_battery_water_cables_FS_COMMENT_DATE, fuel_theft_leakage_FS_COMMENT_DATE, closed_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, genset_canopy_clean_tidy, genset_canopy_clean_tidy_ACTION, genset_canopy_clean_tidy_ACTION_DATE, genset_canopy_clean_tidy_FS_COMMENT, padlocks_on_all_doors, padlocks_on_all_doors_ACTION, padlocks_on_all_doors_ACTION_DATE, padlocks_on_all_doors_FS_COMMENT, ats_panel_alarms, ats_panel_alarms_ACTION, ats_panel_alarms_ACTION_DATE, ats_panel_alarms_FS_COMMENT, noice_level, genset_serviced, genset_serviced_ACTION, genset_serviced_ACTION_DATE, genset_serviced_FS_COMMENT, genset_serviced_date, genset_service_tag_with_previous_data, next_service_date, water_fuel_level_ok, water_fuel_level_ok_ACTION, water_fuel_level_ok_ACTION_DATE, water_fuel_level_ok_FS_COMMENT, fuel_level, double_genset_automation_working, double_genset_automation_working_ACTION, double_genset_automation_working_ACTION_DATE, double_genset_automation_working_FS_COMMENT, test_auto_start_by_switching_off_mains, test_auto_start_by_switching_off_mains_ACTION, test_auto_start_by_switching_off_mains_ACTION_DATE, test_auto_start_by_switching_off_mains_FS_COMMENT, kva_running_load, exhaust_system_broken_noisy_lagging, exhaust_system_broken_noisy_lagging_ACTION, exhaust_system_broken_noisy_lagging_ACTION_DATE, exhaust_system_broken_noisy_lagging_FS_COMMENT, check_engine_cranking_battery_water_cables, check_engine_cranking_battery_water_cables_ACTION, check_engine_cranking_battery_water_cables_ACTION_DATE, check_engine_cranking_battery_water_cables_FS_COMMENT, fuel_theft_leakage, fuel_theft_leakage_ACTION, fuel_theft_leakage_ACTION_DATE, fuel_theft_leakage_FS_COMMENT, genset_canopy_clean_tidy_FS_COMMENT_DATE, padlocks_on_all_doors_FS_COMMENT_DATE, ats_panel_alarms_FS_COMMENT_DATE, genset_serviced_FS_COMMENT_DATE, water_fuel_level_ok_FS_COMMENT_DATE, double_genset_automation_working_FS_COMMENT_DATE, test_auto_start_by_switching_off_mains_FS_COMMENT_DATE, exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE, check_engine_cranking_battery_water_cables_FS_COMMENT_DATE, fuel_theft_leakage_FS_COMMENT_DATE, status, closed_date, closed_by', 'safe', 'on'=>'search'),
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
			'genset_canopy_clean_tidy' => 'Genset Canopy Clean Tidy',
			'genset_canopy_clean_tidy_ACTION' => 'Genset Canopy Clean Tidy Action',
			'genset_canopy_clean_tidy_ACTION_DATE' => 'Genset Canopy Clean Tidy Action Date',
			'genset_canopy_clean_tidy_FS_COMMENT' => 'Genset Canopy Clean Tidy Fs Comment',
			'padlocks_on_all_doors' => 'Padlocks On All Doors',
			'padlocks_on_all_doors_ACTION' => 'Padlocks On All Doors Action',
			'padlocks_on_all_doors_ACTION_DATE' => 'Padlocks On All Doors Action Date',
			'padlocks_on_all_doors_FS_COMMENT' => 'Padlocks On All Doors Fs Comment',
			'ats_panel_alarms' => 'Ats Panel Alarms',
			'ats_panel_alarms_ACTION' => 'Ats Panel Alarms Action',
			'ats_panel_alarms_ACTION_DATE' => 'Ats Panel Alarms Action Date',
			'ats_panel_alarms_FS_COMMENT' => 'Ats Panel Alarms Fs Comment',
			'noice_level' => 'Noice Level',
			'genset_serviced' => 'Genset Serviced',
			'genset_serviced_ACTION' => 'Genset Serviced Action',
			'genset_serviced_ACTION_DATE' => 'Genset Serviced Action Date',
			'genset_serviced_FS_COMMENT' => 'Genset Serviced Fs Comment',
			'genset_serviced_date' => 'Genset Serviced Date',
			'genset_service_tag_with_previous_data' => 'Genset Service Tag With Previous Data',
			'next_service_date' => 'Next Service Date',
			'water_fuel_level_ok' => 'Water Fuel Level Ok',
			'water_fuel_level_ok_ACTION' => 'Water Fuel Level Ok Action',
			'water_fuel_level_ok_ACTION_DATE' => 'Water Fuel Level Ok Action Date',
			'water_fuel_level_ok_FS_COMMENT' => 'Water Fuel Level Ok Fs Comment',
			'fuel_level' => 'Fuel Level',
			'double_genset_automation_working' => 'Double Genset Automation Working',
			'double_genset_automation_working_ACTION' => 'Double Genset Automation Working Action',
			'double_genset_automation_working_ACTION_DATE' => 'Double Genset Automation Working Action Date',
			'double_genset_automation_working_FS_COMMENT' => 'Double Genset Automation Working Fs Comment',
			'test_auto_start_by_switching_off_mains' => 'Test Auto Start By Switching Off Mains',
			'test_auto_start_by_switching_off_mains_ACTION' => 'Test Auto Start By Switching Off Mains Action',
			'test_auto_start_by_switching_off_mains_ACTION_DATE' => 'Test Auto Start By Switching Off Mains Action Date',
			'test_auto_start_by_switching_off_mains_FS_COMMENT' => 'Test Auto Start By Switching Off Mains Fs Comment',
			'kva_running_load' => 'Kva Running Load',
			'exhaust_system_broken_noisy_lagging' => 'Exhaust System Broken Noisy Lagging',
			'exhaust_system_broken_noisy_lagging_ACTION' => 'Exhaust System Broken Noisy Lagging Action',
			'exhaust_system_broken_noisy_lagging_ACTION_DATE' => 'Exhaust System Broken Noisy Lagging Action Date',
			'exhaust_system_broken_noisy_lagging_FS_COMMENT' => 'Exhaust System Broken Noisy Lagging Fs Comment',
			'check_engine_cranking_battery_water_cables' => 'Check Engine Cranking Battery Water Cables',
			'check_engine_cranking_battery_water_cables_ACTION' => 'Check Engine Cranking Battery Water Cables Action',
			'check_engine_cranking_battery_water_cables_ACTION_DATE' => 'Check Engine Cranking Battery Water Cables Action Date',
			'check_engine_cranking_battery_water_cables_FS_COMMENT' => 'Check Engine Cranking Battery Water Cables Fs Comment',
			'fuel_theft_leakage' => 'Fuel Theft Leakage',
			'fuel_theft_leakage_ACTION' => 'Fuel Theft Leakage Action',
			'fuel_theft_leakage_ACTION_DATE' => 'Fuel Theft Leakage Action Date',
			'fuel_theft_leakage_FS_COMMENT' => 'Fuel Theft Leakage Fs Comment',
			'genset_canopy_clean_tidy_FS_COMMENT_DATE' => 'Genset Canopy Clean Tidy Fs Comment Date',
			'padlocks_on_all_doors_FS_COMMENT_DATE' => 'Padlocks On All Doors Fs Comment Date',
			'ats_panel_alarms_FS_COMMENT_DATE' => 'Ats Panel Alarms Fs Comment Date',
			'genset_serviced_FS_COMMENT_DATE' => 'Genset Serviced Fs Comment Date',
			'water_fuel_level_ok_FS_COMMENT_DATE' => 'Water Fuel Level Ok Fs Comment Date',
			'double_genset_automation_working_FS_COMMENT_DATE' => 'Double Genset Automation Working Fs Comment Date',
			'test_auto_start_by_switching_off_mains_FS_COMMENT_DATE' => 'Test Auto Start By Switching Off Mains Fs Comment Date',
			'exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE' => 'Exhaust System Broken Noisy Lagging Fs Comment Date',
			'check_engine_cranking_battery_water_cables_FS_COMMENT_DATE' => 'Check Engine Cranking Battery Water Cables Fs Comment Date',
			'fuel_theft_leakage_FS_COMMENT_DATE' => 'Fuel Theft Leakage Fs Comment Date',
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
		$criteria->compare('genset_canopy_clean_tidy',$this->genset_canopy_clean_tidy,true);
		$criteria->compare('genset_canopy_clean_tidy_ACTION',$this->genset_canopy_clean_tidy_ACTION,true);
		$criteria->compare('genset_canopy_clean_tidy_ACTION_DATE',$this->genset_canopy_clean_tidy_ACTION_DATE,true);
		$criteria->compare('genset_canopy_clean_tidy_FS_COMMENT',$this->genset_canopy_clean_tidy_FS_COMMENT,true);
		$criteria->compare('padlocks_on_all_doors',$this->padlocks_on_all_doors,true);
		$criteria->compare('padlocks_on_all_doors_ACTION',$this->padlocks_on_all_doors_ACTION,true);
		$criteria->compare('padlocks_on_all_doors_ACTION_DATE',$this->padlocks_on_all_doors_ACTION_DATE,true);
		$criteria->compare('padlocks_on_all_doors_FS_COMMENT',$this->padlocks_on_all_doors_FS_COMMENT,true);
		$criteria->compare('ats_panel_alarms',$this->ats_panel_alarms,true);
		$criteria->compare('ats_panel_alarms_ACTION',$this->ats_panel_alarms_ACTION,true);
		$criteria->compare('ats_panel_alarms_ACTION_DATE',$this->ats_panel_alarms_ACTION_DATE,true);
		$criteria->compare('ats_panel_alarms_FS_COMMENT',$this->ats_panel_alarms_FS_COMMENT,true);
		$criteria->compare('noice_level',$this->noice_level,true);
		$criteria->compare('genset_serviced',$this->genset_serviced,true);
		$criteria->compare('genset_serviced_ACTION',$this->genset_serviced_ACTION,true);
		$criteria->compare('genset_serviced_ACTION_DATE',$this->genset_serviced_ACTION_DATE,true);
		$criteria->compare('genset_serviced_FS_COMMENT',$this->genset_serviced_FS_COMMENT,true);
		$criteria->compare('genset_serviced_date',$this->genset_serviced_date,true);
		$criteria->compare('genset_service_tag_with_previous_data',$this->genset_service_tag_with_previous_data,true);
		$criteria->compare('next_service_date',$this->next_service_date,true);
		$criteria->compare('water_fuel_level_ok',$this->water_fuel_level_ok,true);
		$criteria->compare('water_fuel_level_ok_ACTION',$this->water_fuel_level_ok_ACTION,true);
		$criteria->compare('water_fuel_level_ok_ACTION_DATE',$this->water_fuel_level_ok_ACTION_DATE,true);
		$criteria->compare('water_fuel_level_ok_FS_COMMENT',$this->water_fuel_level_ok_FS_COMMENT,true);
		$criteria->compare('fuel_level',$this->fuel_level,true);
		$criteria->compare('double_genset_automation_working',$this->double_genset_automation_working,true);
		$criteria->compare('double_genset_automation_working_ACTION',$this->double_genset_automation_working_ACTION,true);
		$criteria->compare('double_genset_automation_working_ACTION_DATE',$this->double_genset_automation_working_ACTION_DATE,true);
		$criteria->compare('double_genset_automation_working_FS_COMMENT',$this->double_genset_automation_working_FS_COMMENT,true);
		$criteria->compare('test_auto_start_by_switching_off_mains',$this->test_auto_start_by_switching_off_mains,true);
		$criteria->compare('test_auto_start_by_switching_off_mains_ACTION',$this->test_auto_start_by_switching_off_mains_ACTION,true);
		$criteria->compare('test_auto_start_by_switching_off_mains_ACTION_DATE',$this->test_auto_start_by_switching_off_mains_ACTION_DATE,true);
		$criteria->compare('test_auto_start_by_switching_off_mains_FS_COMMENT',$this->test_auto_start_by_switching_off_mains_FS_COMMENT,true);
		$criteria->compare('kva_running_load',$this->kva_running_load,true);
		$criteria->compare('exhaust_system_broken_noisy_lagging',$this->exhaust_system_broken_noisy_lagging,true);
		$criteria->compare('exhaust_system_broken_noisy_lagging_ACTION',$this->exhaust_system_broken_noisy_lagging_ACTION,true);
		$criteria->compare('exhaust_system_broken_noisy_lagging_ACTION_DATE',$this->exhaust_system_broken_noisy_lagging_ACTION_DATE,true);
		$criteria->compare('exhaust_system_broken_noisy_lagging_FS_COMMENT',$this->exhaust_system_broken_noisy_lagging_FS_COMMENT,true);
		$criteria->compare('check_engine_cranking_battery_water_cables',$this->check_engine_cranking_battery_water_cables,true);
		$criteria->compare('check_engine_cranking_battery_water_cables_ACTION',$this->check_engine_cranking_battery_water_cables_ACTION,true);
		$criteria->compare('check_engine_cranking_battery_water_cables_ACTION_DATE',$this->check_engine_cranking_battery_water_cables_ACTION_DATE,true);
		$criteria->compare('check_engine_cranking_battery_water_cables_FS_COMMENT',$this->check_engine_cranking_battery_water_cables_FS_COMMENT,true);
		$criteria->compare('fuel_theft_leakage',$this->fuel_theft_leakage,true);
		$criteria->compare('fuel_theft_leakage_ACTION',$this->fuel_theft_leakage_ACTION,true);
		$criteria->compare('fuel_theft_leakage_ACTION_DATE',$this->fuel_theft_leakage_ACTION_DATE,true);
		$criteria->compare('fuel_theft_leakage_FS_COMMENT',$this->fuel_theft_leakage_FS_COMMENT,true);
		$criteria->compare('genset_canopy_clean_tidy_FS_COMMENT_DATE',$this->genset_canopy_clean_tidy_FS_COMMENT_DATE,true);
		$criteria->compare('padlocks_on_all_doors_FS_COMMENT_DATE',$this->padlocks_on_all_doors_FS_COMMENT_DATE,true);
		$criteria->compare('ats_panel_alarms_FS_COMMENT_DATE',$this->ats_panel_alarms_FS_COMMENT_DATE,true);
		$criteria->compare('genset_serviced_FS_COMMENT_DATE',$this->genset_serviced_FS_COMMENT_DATE,true);
		$criteria->compare('water_fuel_level_ok_FS_COMMENT_DATE',$this->water_fuel_level_ok_FS_COMMENT_DATE,true);
		$criteria->compare('double_genset_automation_working_FS_COMMENT_DATE',$this->double_genset_automation_working_FS_COMMENT_DATE,true);
		$criteria->compare('test_auto_start_by_switching_off_mains_FS_COMMENT_DATE',$this->test_auto_start_by_switching_off_mains_FS_COMMENT_DATE,true);
		$criteria->compare('exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE',$this->exhaust_system_broken_noisy_lagging_FS_COMMENT_DATE,true);
		$criteria->compare('check_engine_cranking_battery_water_cables_FS_COMMENT_DATE',$this->check_engine_cranking_battery_water_cables_FS_COMMENT_DATE,true);
		$criteria->compare('fuel_theft_leakage_FS_COMMENT_DATE',$this->fuel_theft_leakage_FS_COMMENT_DATE,true);
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
	 * @return GensetReport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function raiseSiteIssue()
        {
            $attr = $this->attributes;
            $excempt = array(
                    'ats_panel_alarms',
                    'exhaust_system_broken_noisy_lagging',
                    'fuel_theft_leakage',
                    );
            foreach ( $attr as $key => $value )
            {
                if ( $value == 'n' && !in_array($key, $excempt))
                {
                    $site_id = $this->report->site_id;
                    $action = $key.'_ACTION';
                    $action_date = $key.'_ACTION_DATE';
                    $issue = new SiteIssues();
                    $issue->report_id = $this->report_id;
                    $issue->issue_type = 'compound';
                    $issue->issue_description = $key;
                    $issue->issue_action = $this->$action;
                    $issue->issue_action_date = strlen($this->$action_date) > 9 ? trim($this->$action_date): NULL;
                    $issue->site_id = $site_id;
                    $issue->issue_date = $this->report->check_date;
                    $issue->save();
                }
                elseif ( $value == 'y' && in_array($key, $excempt))
                {
                    $site_id = $this->report->site_id;
                    $action = $key.'_ACTION';
                    $action_date = $key.'_ACTION_DATE';
                    $issue = new SiteIssues();
                    $issue->report_id = $this->report_id;
                    $issue->issue_type = 'compound';
                    $issue->issue_description = $key;
                    $issue->issue_action = $this->$action;
                    $issue->issue_action_date = strlen($this->$action_date) > 9 ? trim($this->$action_date): NULL;
                    $issue->site_id = $site_id;
                    $issue->issue_date = $this->report->check_date;
                    $issue->save();
                }
            }
        }
}
