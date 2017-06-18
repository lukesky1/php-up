<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    
    // New
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {
        
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'birthDate', 'hiringDate', 'city', 'position', 'idCode', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'birthDate'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            
            // New
            [['birthDate', 'hiringDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length' => 10],
            [['hiringDate', 'position', 'idCode'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }
    
    public function save()
    {
        return true;
    }
    
    public static function find()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function getCitiesList()
    {
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }
}

