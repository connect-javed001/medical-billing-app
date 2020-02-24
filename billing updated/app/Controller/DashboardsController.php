<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class DashboardsController extends AppController {
public $helpers = array('Js' => array('jquery'));
/**
 * Controller name
 *
 * @var string
 */
 public function beforeFilter()
        {
          parent::beforeFilter();
          date_default_timezone_set('Asia/Calcutta'); 
          //add some code here that must be run before each UsersController's action
        }
        public function index()
        {
             $this->set('title_for_layout', 'Dashboard');
             $this->layout='dash';
        }
       
     // this  function is for save access logs of student   
        function saveLog($reqData){
            $this->loadModel('AccessLog');
            if(!empty($reqData)){
                $this->AccessLog->save($reqData);
            }
            return true;
        }
}
