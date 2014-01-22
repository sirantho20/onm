<?php

/**
 * This is the model class for table "compound_report".
 *
 * The followings are the available columns in table 'compound_report':
 * @property integer $id
 * @property string $gate_and_lock_ok
 * @property string $site_neat_tidy
 * @property string $weed_growing
 * @property string $fence_in_good_condition
 * @property string $gate_and_lock_ok_ACTION
 * @property string $gate_and_lock_ok_ACTION_DATE
 * @property string $gate_and_lock_ok_FS_COMMENT
 * @property string $site_neat_tidy_ACTION
 * @property string $site_neat_tidy_ACTION_DATE
 * @property string $site_neat_tidy_FS_COMMENT
 * @property string $weed_growing_ACTION
 * @property string $weed_growing_ACTION_DATE
 * @property string $weed_growing_FS_COMMENT
 * @property string $fence_in_good_condition_ACTION
 * @property string $fence_in_good_condition_ACTION_DATE
 * @property string $fence_in_good_condition_FS_COMMENT
 * @property string $retaining_walls_condition_cracks
 * @property string $retaining_walls_condition_cracks_ACTION
 * @property string $retaining_walls_condition_cracks_ACTION_DATE
 * @property string $retaining_walls_condition_cracks_FS_COMMENT
 * @property string $sign_of_flooding
 * @property string $sign_of_flooding_ACTION
 * @property string $sign_of_flooding_ACTION_DATE
 * @property string $sign_of_flooding_FS_COMMENT
 * @property string $ecg_meter_box_secured
 * @property string $ecg_meter_box_secured_ACTION
 * @property string $ecg_meter_box_secured_ACTION_DATE
 * @property string $ecg_meter_box_secured_FS_COMMENT
 * @property string $security_guard_on_site
 * @property string $security_guard_on_site_ACTION
 * @property string $security_guard_on_site_ACTION_DATE
 * @property string $security_guard_on_site_FS_COMMENT
 * @property string $log_book_on_site
 * @property string $log_book_on_site_ACTION
 * @property string $log_book_on_site_ACTION_DATE
 * @property string $log_book_on_site_FS_COMMENT
 * @property string $avr_on_site
 * @property string $avr_on_site_ACTION
 * @property string $avr_on_site_ACTION_DATE
 * @property string $avr_on_site_FS_COMMENT
 * @property string $avr_operational
 * @property string $avr_operational_ACTION
 * @property string $avr_operational_ACTION_DATE
 * @property string $avr_operational_FS_COMMENT
 * @property string $fuel_spilage
 * @property string $fuel_spilage_ACTION
 * @property string $fuel_spilage_ACTION_DATE
 * @property string $fuel_spilage_FS_COMMENT
 * @property string $installation_works_since_last_visit
 * @property string $installation_works_since_last_visit_ACTION
 * @property string $installation_works_since_last_visit_ACTION_DATE
 * @property string $installation_works_since_last_visit_FS_COMMENT
 * @property integer $report_id
 * @property string $gate_and_lock_ok_FS_COMMENT_DATE
 * @property string $site_neat_tidy_FS_COMMENT_DATE
 * @property string $weed_growing_FS_COMMENT_DATE
 * @property string $fence_in_good_condition_FS_COMMENT_DATE
 * @property string $retaining_walls_condition_cracks_FS_COMMENT_DATE
 * @property string $sign_of_flooding_FS_COMMENT_DATE
 * @property string $ecg_meter_box_secured_FS_COMMENT_DATE
 * @property string $security_guard_on_site_FS_COMMENT_DATE
 * @property string $log_book_on_site_FS_COMMENT_DATE
 * @property string $avr_on_site_FS_COMMENT_DATE
 * @property string $fuel_spilage_FS_COMMENT_DATE
 * @property string $installation_works_since_last_visit_FS_COMMENT_DATE
 * @property string $stataus
 * @property string $closed_date
 * @property string $closed_by
 *
 * The followings are the available model relations:
 * @property McMonthlyReport $report
 */
class CompoundReport extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compound_report';
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
			array('gate_and_lock_ok, site_neat_tidy, weed_growing, retaining_walls_condition_cracks, sign_of_flooding, ecg_meter_box_secured, security_guard_on_site, log_book_on_site, avr_on_site, avr_operational, fuel_spilage, installation_works_since_last_visit', 'length', 'max'=>1),
			array('fence_in_good_condition', 'length', 'max'=>10),
			array('stataus, closed_by', 'length', 'max'=>50),
			array('gate_and_lock_ok_ACTION, gate_and_lock_ok_ACTION_DATE, gate_and_lock_ok_FS_COMMENT, site_neat_tidy_ACTION, site_neat_tidy_ACTION_DATE, site_neat_tidy_FS_COMMENT, weed_growing_ACTION, weed_growing_ACTION_DATE, weed_growing_FS_COMMENT, fence_in_good_condition_ACTION, fence_in_good_condition_ACTION_DATE, fence_in_good_condition_FS_COMMENT, retaining_walls_condition_cracks_ACTION, retaining_walls_condition_cracks_ACTION_DATE, retaining_walls_condition_cracks_FS_COMMENT, sign_of_flooding_ACTION, sign_of_flooding_ACTION_DATE, sign_of_flooding_FS_COMMENT, ecg_meter_box_secured_ACTION, ecg_meter_box_secured_ACTION_DATE, ecg_meter_box_secured_FS_COMMENT, security_guard_on_site_ACTION, security_guard_on_site_ACTION_DATE, security_guard_on_site_FS_COMMENT, log_book_on_site_ACTION, log_book_on_site_ACTION_DATE, log_book_on_site_FS_COMMENT, avr_on_site_ACTION, avr_on_site_ACTION_DATE, avr_on_site_FS_COMMENT, avr_operational_ACTION, avr_operational_ACTION_DATE, avr_operational_FS_COMMENT, fuel_spilage_ACTION, fuel_spilage_ACTION_DATE, fuel_spilage_FS_COMMENT, installation_works_since_last_visit_ACTION, installation_works_since_last_visit_ACTION_DATE, installation_works_since_last_visit_FS_COMMENT, gate_and_lock_ok_FS_COMMENT_DATE, site_neat_tidy_FS_COMMENT_DATE, weed_growing_FS_COMMENT_DATE, fence_in_good_condition_FS_COMMENT_DATE, retaining_walls_condition_cracks_FS_COMMENT_DATE, sign_of_flooding_FS_COMMENT_DATE, ecg_meter_box_secured_FS_COMMENT_DATE, security_guard_on_site_FS_COMMENT_DATE, log_book_on_site_FS_COMMENT_DATE, avr_on_site_FS_COMMENT_DATE, fuel_spilage_FS_COMMENT_DATE, installation_works_since_last_visit_FS_COMMENT_DATE, closed_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gate_and_lock_ok, site_neat_tidy, weed_growing, fence_in_good_condition, gate_and_lock_ok_ACTION, gate_and_lock_ok_ACTION_DATE, gate_and_lock_ok_FS_COMMENT, site_neat_tidy_ACTION, site_neat_tidy_ACTION_DATE, site_neat_tidy_FS_COMMENT, weed_growing_ACTION, weed_growing_ACTION_DATE, weed_growing_FS_COMMENT, fence_in_good_condition_ACTION, fence_in_good_condition_ACTION_DATE, fence_in_good_condition_FS_COMMENT, retaining_walls_condition_cracks, retaining_walls_condition_cracks_ACTION, retaining_walls_condition_cracks_ACTION_DATE, retaining_walls_condition_cracks_FS_COMMENT, sign_of_flooding, sign_of_flooding_ACTION, sign_of_flooding_ACTION_DATE, sign_of_flooding_FS_COMMENT, ecg_meter_box_secured, ecg_meter_box_secured_ACTION, ecg_meter_box_secured_ACTION_DATE, ecg_meter_box_secured_FS_COMMENT, security_guard_on_site, security_guard_on_site_ACTION, security_guard_on_site_ACTION_DATE, security_guard_on_site_FS_COMMENT, log_book_on_site, log_book_on_site_ACTION, log_book_on_site_ACTION_DATE, log_book_on_site_FS_COMMENT, avr_on_site, avr_on_site_ACTION, avr_on_site_ACTION_DATE, avr_on_site_FS_COMMENT, avr_operational, avr_operational_ACTION, avr_operational_ACTION_DATE, avr_operational_FS_COMMENT, fuel_spilage, fuel_spilage_ACTION, fuel_spilage_ACTION_DATE, fuel_spilage_FS_COMMENT, installation_works_since_last_visit, installation_works_since_last_visit_ACTION, installation_works_since_last_visit_ACTION_DATE, installation_works_since_last_visit_FS_COMMENT, report_id, gate_and_lock_ok_FS_COMMENT_DATE, site_neat_tidy_FS_COMMENT_DATE, weed_growing_FS_COMMENT_DATE, fence_in_good_condition_FS_COMMENT_DATE, retaining_walls_condition_cracks_FS_COMMENT_DATE, sign_of_flooding_FS_COMMENT_DATE, ecg_meter_box_secured_FS_COMMENT_DATE, security_guard_on_site_FS_COMMENT_DATE, log_book_on_site_FS_COMMENT_DATE, avr_on_site_FS_COMMENT_DATE, fuel_spilage_FS_COMMENT_DATE, installation_works_since_last_visit_FS_COMMENT_DATE, stataus, closed_date, closed_by', 'safe', 'on'=>'search'),
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
			'gate_and_lock_ok' => 'Are the gates OK, with correct locks?',
			'site_neat_tidy' => 'Is the Site neat and tidy?',
			'weed_growing' => 'Are weeds growing on site?',
			'fence_in_good_condition' => 'Is the fence in good condition?',
			'gate_and_lock_ok_ACTION' => 'Action',
			'gate_and_lock_ok_ACTION_DATE' => 'Action Date',
			'gate_and_lock_ok_FS_COMMENT' => 'Gate And Lock Ok Fs Comment',
			'site_neat_tidy_ACTION' => 'Action',
			'site_neat_tidy_ACTION_DATE' => 'Action Date',
			'site_neat_tidy_FS_COMMENT' => 'Site Neat Tidy Fs Comment',
			'weed_growing_ACTION' => 'Action',
			'weed_growing_ACTION_DATE' => 'Action Date',
			'weed_growing_FS_COMMENT' => 'Weed Growing Fs Comment',
			'fence_in_good_condition_ACTION' => 'Action',
			'fence_in_good_condition_ACTION_DATE' => 'Action Date',
			'fence_in_good_condition_FS_COMMENT' => 'Fence In Good Condition Fs Comment',
			'retaining_walls_condition_cracks' => 'Are the retaining walls in good condition? Check for cracks.',
			'retaining_walls_condition_cracks_ACTION' => 'Action',
			'retaining_walls_condition_cracks_ACTION_DATE' => 'Action Date',
			'retaining_walls_condition_cracks_FS_COMMENT' => 'Retaining Walls Condition Cracks Fs Comment',
			'sign_of_flooding' => 'Is there any sign of flooding around the site?',
			'sign_of_flooding_ACTION' => 'Action',
			'sign_of_flooding_ACTION_DATE' => 'Action Date',
			'sign_of_flooding_FS_COMMENT' => 'Sign Of Flooding Fs Comment',
			'ecg_meter_box_secured' => 'Is the ECG/Volta meter box well secured',
			'ecg_meter_box_secured_ACTION' => 'Action',
			'ecg_meter_box_secured_ACTION_DATE' => 'Action Date',
			'ecg_meter_box_secured_FS_COMMENT' => 'Ecg Meter Box Secured Fs Comment',
			'security_guard_on_site' => 'Is the security guard on site?',
			'security_guard_on_site_ACTION' => 'Action',
			'security_guard_on_site_ACTION_DATE' => 'Action Date',
			'security_guard_on_site_FS_COMMENT' => 'Security Guard On Site Fs Comment',
			'log_book_on_site' => 'Is there a log book on site?',
			'log_book_on_site_ACTION' => 'Action',
			'log_book_on_site_ACTION_DATE' => 'Action Date',
			'log_book_on_site_FS_COMMENT' => 'Log Book On Site Fs Comment',
			'avr_on_site' => 'Is there an AVR on site?',
			'avr_on_site_ACTION' => 'Action',
			'avr_on_site_ACTION_DATE' => 'Action Date',
			'avr_on_site_FS_COMMENT' => 'Avr On Site Fs Comment',
			'avr_operational' => 'Is the AVR operational?',
			'avr_operational_ACTION' => 'Action',
			'avr_operational_ACTION_DATE' => 'Action Date',
			'avr_operational_FS_COMMENT' => 'Avr Operational Fs Comment',
			'fuel_spilage' => 'Is there any fuel spillage?',
			'fuel_spilage_ACTION' => 'Action',
			'fuel_spilage_ACTION_DATE' => 'Action Date',
			'fuel_spilage_FS_COMMENT' => 'Fuel Spilage Fs Comment',
			'installation_works_since_last_visit' => 'Has there been any installation work done since last visit?',
			'installation_works_since_last_visit_ACTION' => 'Action',
			'installation_works_since_last_visit_ACTION_DATE' => 'Action Date',
			'installation_works_since_last_visit_FS_COMMENT' => 'Installation Works Since Last Visit Fs Comment',
			'report_id' => 'Report',
			'gate_and_lock_ok_FS_COMMENT_DATE' => 'Gate And Lock Ok Fs Comment Date',
			'site_neat_tidy_FS_COMMENT_DATE' => 'Site Neat Tidy Fs Comment Date',
			'weed_growing_FS_COMMENT_DATE' => 'Weed Growing Fs Comment Date',
			'fence_in_good_condition_FS_COMMENT_DATE' => 'Fence In Good Condition Fs Comment Date',
			'retaining_walls_condition_cracks_FS_COMMENT_DATE' => 'Retaining Walls Condition Cracks Fs Comment Date',
			'sign_of_flooding_FS_COMMENT_DATE' => 'Sign Of Flooding Fs Comment Date',
			'ecg_meter_box_secured_FS_COMMENT_DATE' => 'Ecg Meter Box Secured Fs Comment Date',
			'security_guard_on_site_FS_COMMENT_DATE' => 'Security Guard On Site Fs Comment Date',
			'log_book_on_site_FS_COMMENT_DATE' => 'Log Book On Site Fs Comment Date',
			'avr_on_site_FS_COMMENT_DATE' => 'Avr On Site Fs Comment Date',
			'fuel_spilage_FS_COMMENT_DATE' => 'Fuel Spilage Fs Comment Date',
			'installation_works_since_last_visit_FS_COMMENT_DATE' => 'Installation Works Since Last Visit Fs Comment Date',
			'stataus' => 'Stataus',
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
		$criteria->compare('gate_and_lock_ok',$this->gate_and_lock_ok,true);
		$criteria->compare('site_neat_tidy',$this->site_neat_tidy,true);
		$criteria->compare('weed_growing',$this->weed_growing,true);
		$criteria->compare('fence_in_good_condition',$this->fence_in_good_condition,true);
		$criteria->compare('gate_and_lock_ok_ACTION',$this->gate_and_lock_ok_ACTION,true);
		$criteria->compare('gate_and_lock_ok_ACTION_DATE',$this->gate_and_lock_ok_ACTION_DATE,true);
		$criteria->compare('gate_and_lock_ok_FS_COMMENT',$this->gate_and_lock_ok_FS_COMMENT,true);
		$criteria->compare('site_neat_tidy_ACTION',$this->site_neat_tidy_ACTION,true);
		$criteria->compare('site_neat_tidy_ACTION_DATE',$this->site_neat_tidy_ACTION_DATE,true);
		$criteria->compare('site_neat_tidy_FS_COMMENT',$this->site_neat_tidy_FS_COMMENT,true);
		$criteria->compare('weed_growing_ACTION',$this->weed_growing_ACTION,true);
		$criteria->compare('weed_growing_ACTION_DATE',$this->weed_growing_ACTION_DATE,true);
		$criteria->compare('weed_growing_FS_COMMENT',$this->weed_growing_FS_COMMENT,true);
		$criteria->compare('fence_in_good_condition_ACTION',$this->fence_in_good_condition_ACTION,true);
		$criteria->compare('fence_in_good_condition_ACTION_DATE',$this->fence_in_good_condition_ACTION_DATE,true);
		$criteria->compare('fence_in_good_condition_FS_COMMENT',$this->fence_in_good_condition_FS_COMMENT,true);
		$criteria->compare('retaining_walls_condition_cracks',$this->retaining_walls_condition_cracks,true);
		$criteria->compare('retaining_walls_condition_cracks_ACTION',$this->retaining_walls_condition_cracks_ACTION,true);
		$criteria->compare('retaining_walls_condition_cracks_ACTION_DATE',$this->retaining_walls_condition_cracks_ACTION_DATE,true);
		$criteria->compare('retaining_walls_condition_cracks_FS_COMMENT',$this->retaining_walls_condition_cracks_FS_COMMENT,true);
		$criteria->compare('sign_of_flooding',$this->sign_of_flooding,true);
		$criteria->compare('sign_of_flooding_ACTION',$this->sign_of_flooding_ACTION,true);
		$criteria->compare('sign_of_flooding_ACTION_DATE',$this->sign_of_flooding_ACTION_DATE,true);
		$criteria->compare('sign_of_flooding_FS_COMMENT',$this->sign_of_flooding_FS_COMMENT,true);
		$criteria->compare('ecg_meter_box_secured',$this->ecg_meter_box_secured,true);
		$criteria->compare('ecg_meter_box_secured_ACTION',$this->ecg_meter_box_secured_ACTION,true);
		$criteria->compare('ecg_meter_box_secured_ACTION_DATE',$this->ecg_meter_box_secured_ACTION_DATE,true);
		$criteria->compare('ecg_meter_box_secured_FS_COMMENT',$this->ecg_meter_box_secured_FS_COMMENT,true);
		$criteria->compare('security_guard_on_site',$this->security_guard_on_site,true);
		$criteria->compare('security_guard_on_site_ACTION',$this->security_guard_on_site_ACTION,true);
		$criteria->compare('security_guard_on_site_ACTION_DATE',$this->security_guard_on_site_ACTION_DATE,true);
		$criteria->compare('security_guard_on_site_FS_COMMENT',$this->security_guard_on_site_FS_COMMENT,true);
		$criteria->compare('log_book_on_site',$this->log_book_on_site,true);
		$criteria->compare('log_book_on_site_ACTION',$this->log_book_on_site_ACTION,true);
		$criteria->compare('log_book_on_site_ACTION_DATE',$this->log_book_on_site_ACTION_DATE,true);
		$criteria->compare('log_book_on_site_FS_COMMENT',$this->log_book_on_site_FS_COMMENT,true);
		$criteria->compare('avr_on_site',$this->avr_on_site,true);
		$criteria->compare('avr_on_site_ACTION',$this->avr_on_site_ACTION,true);
		$criteria->compare('avr_on_site_ACTION_DATE',$this->avr_on_site_ACTION_DATE,true);
		$criteria->compare('avr_on_site_FS_COMMENT',$this->avr_on_site_FS_COMMENT,true);
		$criteria->compare('avr_operational',$this->avr_operational,true);
		$criteria->compare('avr_operational_ACTION',$this->avr_operational_ACTION,true);
		$criteria->compare('avr_operational_ACTION_DATE',$this->avr_operational_ACTION_DATE,true);
		$criteria->compare('avr_operational_FS_COMMENT',$this->avr_operational_FS_COMMENT,true);
		$criteria->compare('fuel_spilage',$this->fuel_spilage,true);
		$criteria->compare('fuel_spilage_ACTION',$this->fuel_spilage_ACTION,true);
		$criteria->compare('fuel_spilage_ACTION_DATE',$this->fuel_spilage_ACTION_DATE,true);
		$criteria->compare('fuel_spilage_FS_COMMENT',$this->fuel_spilage_FS_COMMENT,true);
		$criteria->compare('installation_works_since_last_visit',$this->installation_works_since_last_visit,true);
		$criteria->compare('installation_works_since_last_visit_ACTION',$this->installation_works_since_last_visit_ACTION,true);
		$criteria->compare('installation_works_since_last_visit_ACTION_DATE',$this->installation_works_since_last_visit_ACTION_DATE,true);
		$criteria->compare('installation_works_since_last_visit_FS_COMMENT',$this->installation_works_since_last_visit_FS_COMMENT,true);
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('gate_and_lock_ok_FS_COMMENT_DATE',$this->gate_and_lock_ok_FS_COMMENT_DATE,true);
		$criteria->compare('site_neat_tidy_FS_COMMENT_DATE',$this->site_neat_tidy_FS_COMMENT_DATE,true);
		$criteria->compare('weed_growing_FS_COMMENT_DATE',$this->weed_growing_FS_COMMENT_DATE,true);
		$criteria->compare('fence_in_good_condition_FS_COMMENT_DATE',$this->fence_in_good_condition_FS_COMMENT_DATE,true);
		$criteria->compare('retaining_walls_condition_cracks_FS_COMMENT_DATE',$this->retaining_walls_condition_cracks_FS_COMMENT_DATE,true);
		$criteria->compare('sign_of_flooding_FS_COMMENT_DATE',$this->sign_of_flooding_FS_COMMENT_DATE,true);
		$criteria->compare('ecg_meter_box_secured_FS_COMMENT_DATE',$this->ecg_meter_box_secured_FS_COMMENT_DATE,true);
		$criteria->compare('security_guard_on_site_FS_COMMENT_DATE',$this->security_guard_on_site_FS_COMMENT_DATE,true);
		$criteria->compare('log_book_on_site_FS_COMMENT_DATE',$this->log_book_on_site_FS_COMMENT_DATE,true);
		$criteria->compare('avr_on_site_FS_COMMENT_DATE',$this->avr_on_site_FS_COMMENT_DATE,true);
		$criteria->compare('fuel_spilage_FS_COMMENT_DATE',$this->fuel_spilage_FS_COMMENT_DATE,true);
		$criteria->compare('installation_works_since_last_visit_FS_COMMENT_DATE',$this->installation_works_since_last_visit_FS_COMMENT_DATE,true);
		$criteria->compare('stataus',$this->stataus,true);
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
	 * @return CompoundReport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterSave() {
            $this->raiseSiteIssue();
            parent::afterSave();
        }


        public function raiseSiteIssue()
        {
            $attr = $this->attributes;
            $excempt = array(
                    'weed_growing',
                    'sign_of_flooding',
                    'fuel_spilage'
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
