<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppModel', 'AppModel');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class UserModel extends AppModel {
    public function signupValidate()
    {
        debug($this->data);exit;
      $validate = array(
    'name' => array(
        'alphanumeric' => array(
            'rule' => array('alphanumeric'),
            'allowEmpty' => false,
            'required' => true,
            'message' => "Alphanumeric characters only.",
        ),
        'between' => array(
            'rule' => array('between',4,20),
            'message' => "The username must be between %d and %d characters.",
        ),
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => "This username is already taken.",
        ),
    ),
    'password' => array(
        'notEmpty' => array(
            'rule' => array('notEmpty'),
            'message' => "You must specify your password.",
        ),
    ),
    'cpassword' => array(
        'between' => array(
            'rule' => array('between', 8, 20),
            'required' => true,
            'message' => "The password must be between %d and %d characters.",
        ),
        'equalTo' => array(
            'rule' => array('equalToField', 'password'),
            'message' => "Passwords are not identical.",
        )
    ),
    
    'email' => array(
        'email' => array(
            'rule' => array('email'),
            'required' => true,
            'message' => "You must specify a valid Email address.",
        ),
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => "This Email is already taken.",
        ),
    ),
   
    'mobile' => array(
        'maxLength' => array(
            'rule' => array('maxLength', 20),
            'message' => "Your phone number can't contain more than %d characters.",
            'on' => 'add',
        ),
    ),
    'email' => array(
        'maxLength' => array(
            'rule' => array('maxLength', 255),
            'message' => "Your email address can't contain more than %d characters.",
            'on' => 'add',
        ),
    ),
   );  
       return $validate;
    }
      
}
