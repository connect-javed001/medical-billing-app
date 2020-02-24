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
//App::import('Vendor','tcpdf/tcpdf');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class StatesController extends AppController {
    public $helpers = array('Js' => array('jquery'),'session');
    
    /**
     * Controller name
     *
     * @var string
     */
    public function beforeFilter()
     {
       parent::beforeFilter();
       $params = $this->params['action'];
       $this->set(compact('params'));
     }
    

    public function gdrive(){
      die('hello');
    }
    public function home()
    {  
        $this->layout='sb';
        $this->set('title_for_layout', 'Home');
        $this->isLogin();
    }
//    public function saleReport()
//    {  
//         $this->layout='sb';
//        $this->isLogin();
//        $this->set('title_for_layout', 'Invoice list');
//        $this->loadModel('InvoiceItem');
//          $this->InvoiceItem->bindModel(array('belongsTo'=>array(
//                            'Medicine'=>array(
//                             'className' => 'Medicine',
//                             'conditions' => "InvoiceItem.medicine_id =Medicine.id ",
//                   ) ))
//           ); 
//        $datas = $this->InvoiceItem->find('all',array());
//        debug($datas);exit;
//        $this->set(compact('datas'));
//    }
    public function invoiceList()
    {  
         $this->layout='sb';
        $this->isLogin();
        $this->set('title_for_layout', 'Invoice list');
       
    }
    public function invoiceData()
    {  
         $this->layout=FALSE;
        $this->isLogin();
        $this->loadModel('Invoice');
        $date =$this->request->data['date'];
         $condition =  "Invoice.status='1' ";
         if(!empty($date)){
            $condition =  "Invoice.date= '".$date."' AND Invoice.status='1' ";
        }
        $datas = $this->Invoice->find('all',array('conditions'=>$condition,'order'=>'Invoice.date desc'));
        $this->set(compact('datas'));
    }
    public function invoiceInfo($id)
    {  
        $this->layout='sb';
        $this->isLogin();
        $this->set('title_for_layout', 'Invoice info & print');
        $this->loadModel('Invoice');
        $this->loadModel('InvoiceItem');
        $invoice_data = $this->Invoice->findById($id);
        $this->InvoiceItem->bindModel(array('belongsTo'=>array(
                            'Medicine'=>array(
                             'className' => 'Medicine',
                             'conditions' => "InvoiceItem.medicine_id =Medicine.id ",
                   ) ))
           ); 
       $items = $this->InvoiceItem->findAllByInvoiceId($id);
       $invoice_data['InvoiceItem']=$items;
       $this->set(compact('invoice_data'));
    }

    public function makeInvoice()
    { 
        $this->layout='sb';
        $this->isLogin();
        $this->set('title_for_layout', 'generate invoice');
        $invoiceNo  =$this->generateOrderNo();
         if ($this->request->is('post')) {
              $this->loadModel('Invoice'); 
              $this->loadModel('InvoiceItem'); 
              $reqData = $this->request->data;
              $this->request->data['Invoice']['invoice_no']= $invoiceNo;   
                    if(isset($reqData['InvoiceItem']['quantity']) && !empty($reqData['InvoiceItem']['quantity'])){
                              $this->Invoice->save($this->request->data['Invoice']);
                              $invoiceId = $this->Invoice->id;
                          foreach($reqData['InvoiceItem']['quantity'] as $k=>$quantity){
                              $qty =  $reqData['InvoiceItem']['quantity'][$k];
                              $p_price =  $reqData['InvoiceItem']['piece_price'][$k];
                              $total_price = $qty*$p_price;
                              $itemSave['InvoiceItem'] =array('medicine_id'=>$reqData['InvoiceItem']['medicine_id'][$k],'sale_quantity'=>$qty
                                      ,'piece_price'=>$p_price,'total_price'=>$total_price,'invoice_id'=>$invoiceId);
                              $this->InvoiceItem->save($itemSave);
                              $this->plusStock($reqData['InvoiceItem']['medicine_id'][$k],$qty);
                              $this->InvoiceItem->id='';
                          }
                      return $this->redirect('/invoiceInfo/'.$invoiceId.'');
                    }else{
                          $this->Session->setFlash('There is error','default',array('class' => 'sucess_flash'));
                                         return $this->redirect('/invoiceGenerate');
                    }
      }
      $this->set(compact('invoiceNo'));
    }
    public function invoiceDelete($id)
    { 
        $this->layout=FALSE;
          $this->isLogin();
          $this->loadModel('Invoice');
           $this->Invoice->updateAll(array('Invoice.status'=>"2"),array('Invoice.id'=>$id));
         $this->Session->setFlash('Invoice deleted successfully','default',array('class' => 'sucess_flash'));
         return $this->redirect('/invoiceList');
    }
     public function loadMedList(){
              $this->layout=false;
              $this->autoRender=false;
             $this->loadModel('Medicine');
             $notIn = $this->request->data['notIn'];
             $term = $this->request->data['term'];
             $items = $this->Medicine->find('all',array('conditions'=>array('NOT'=>array('Medicine.id'=>$notIn), 'Medicine.name LIKE' => "%$term%",)));
             // Make sure we have a result
             if(!empty($items)){
                   foreach ($items as $key => $value) {
                        $data[] = array('id' => $value['Medicine']['id'], 'text' => $value['Medicine']['name']);			 	
                   } 
                } else {
                   $data[] = array('id' => '0', 'text' => 'No Products Found');
                }
               
            // return the result in json
            echo json_encode($data);
        }
         public function loaditemData(){
            $this->loadModel('Medicine');
            $this->layout=false;
            $id = $this->request->data['id'];
            $data = $this->Medicine->findById($id);
//            debug($data);exit;
            $this->set(compact('data'));
        }
    public function plusStock($id,$qty){
        $this->loadModel('Medicine');
        $this->Medicine->updateAll(array('Medicine.quantity'=>"Medicine.quantity-$qty"),array('Medicine.id'=>$id));
        return true;
    }
}

//