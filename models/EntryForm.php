<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of EntryForm
 * Creating a Model
 * @author it
 */
class EntryForm extends Model {

    public $name;
    public $email;

    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}
