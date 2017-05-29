<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170525_161050_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'middle_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->date(),
            'city' => $this->string(),
            'hiring_date' => $this->date(),
            'position' => $this->string(),
            'department' => $this->string(),
            'id_code' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
