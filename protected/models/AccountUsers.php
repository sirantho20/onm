<?php

/**
 * This is the model class for table "account_users".
 *
 * The followings are the available columns in table 'account_users':
 * @property integer $id
 * @property integer $account_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $pword
 * @property string $date_added
 * @property string $date_updated
 * @property string $username
 * @property integer $mobile_number
 * @property string $role
 *
 * The followings are the available model relations:
 * @property ContractorAccounts $account
 */
class AccountUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'account_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_id, first_name, last_name, pword, date_added, date_updated, username, role', 'required'),
			array('account_id, mobile_number', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email_address, username, role', 'length', 'max'=>50),
			array('pword', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, account_id, first_name, last_name, email_address, pword, date_added, date_updated, username, mobile_number, role', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'ContractorAccounts', 'account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_id' => 'Account',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email_address' => 'Email Address',
			'pword' => 'Pword',
			'date_added' => 'Date Added',
			'date_updated' => 'Date Updated',
			'username' => 'Username',
			'mobile_number' => 'Mobile Number',
			'role' => 'Role',
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
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('pword',$this->pword,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('mobile_number',$this->mobile_number);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AccountUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function ListAccountUsers()
        {
            $model = AccountUsers::model()->findAll();
            return CHtml::listData($model, 'id', 'first_name');
        }
}
