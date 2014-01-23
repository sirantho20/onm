<?php

/**
 * This is the model class for table "contractor_accounts".
 *
 * The followings are the available columns in table 'contractor_accounts':
 * @property integer $id
 * @property string $account_name
 * @property string $account_type
 * @property string $email_address
 * @property integer $mobile_number
 * @property string $date_added
 * @property string $dateupdated
 *
 * The followings are the available model relations:
 * @property AccountUsers[] $accountUsers
 */
class ContractorAccounts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contractor_accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_name, account_type, date_added, dateupdated', 'required'),
			array('mobile_number', 'numerical', 'integerOnly'=>true),
			array('account_name, account_type, email_address', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, account_name, account_type, email_address, mobile_number, date_added, dateupdated', 'safe', 'on'=>'search'),
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
			'accountUsers' => array(self::HAS_MANY, 'AccountUsers', 'account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_name' => 'Account Name',
			'account_type' => 'Account Type',
			'email_address' => 'Email Address',
			'mobile_number' => 'Mobile Number',
			'date_added' => 'Date Added',
			'dateupdated' => 'Dateupdated',
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
		$criteria->compare('account_name',$this->account_name,true);
		$criteria->compare('account_type',$this->account_type,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('mobile_number',$this->mobile_number);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('dateupdated',$this->dateupdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContractorAccounts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getAccountTypes()
        {
            $arr = array(
                'mc'=>'Maintenance Contractor',
                'fs'=>'Field Supervisor',
                'admin'=>'Manager'
            );
            return $arr;
        }
       
        public function beforeValidate() 
        {
            if ( $this->isNewRecord )
            {
                $this->date_added = new CDbExpression('CURRENT_TIMESTAMP');
                $this->dateupdated = new CDbExpression('CURRENT_TIMESTAMP');
            }
            else 
            {
                $this->dateupdated = new CDbExpression('CURRENT_TIMESTAMP');
            }
            
            return parent::beforeValidate();
        }
        
        public static function getContractorAccounts()
        {
            $model = ContractorAccounts::model()->findAll();
            return CHtml::listData($model, 'id', 'account_name');
        }
}
