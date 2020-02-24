<?php
//     echo $this->Html->script('jquery.timepicker.min');
     echo $this->Html->css('select2');
     echo $this->Html->script('select2.min');
     echo $this->Html->script('make_invoice');
?>
<div class="container-fluid">
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
      <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
		<div class="panel panel-default">
                    <div class="panel-heading black_heading"><i class="fa fa-user-plus"></i>Generate Invoice  <span class="pull-right"><strong>Invoice No. <?php echo $invoiceNo;  ?></strong></span></div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Invoice',array('class'=>'form-horizontal')); ?>
                        <div class="row">
                             <div class="col-md-7">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Customer Name :</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('Invoice.customer_name',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control','required'=>TRUE,'placeholder'=>''));
                                                  ?>
                          </div>
                        </div>
                            </div>
                           
                            <div class="col-md-5">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-3 col-sm-3 control-label">Date: </label>
                          <div class="col-md-9 col-sm-9">
                             <?php
                                                   echo $this->Form->input('Invoice.date',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control date','required'=>TRUE,'placeholder'=>''));
                                                  ?>
                          </div>
                        </div>
                            </div>
                           
                        </div>
                        <div class="row">
                             <div class="col-md-7">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Select Medicine : </label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('Invoice.medicine_id',array('type'=>'select','label' => FALSE,
                                                       'class'=>'form-control medLists','required'=>TRUE,'placeholder'=>'select medicine'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                              <div class="col-md-12 mt10">
                         <table class="table table-bordered table-responsive invoiceItems">
                             <thead>
                                 <tr>
                                     <th>S.No</th>
                                     <th>Medicine Name:</th>
                                     <th>Quantity (piece):</th>
                                     <th>Piece price:</th>
                                     <th>Action:</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="text-center noItem"><td colspan="5">No Items added</td></tr>
                             </tbody>
                               <tfoot>
                                   <tr class="text-center">
                                       <td colspan="3"><strong>Total</strong></td>
                                       <td class="" colspan="1">
                                             <?php
                                                   echo $this->Form->input('Invoice.total_price',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control totalPrice','readonly'=>TRUE,'placeholder'=>''));
                                                  ?>
                                       </td>
                                    </tr>
                                </tfoot>
                         </table>
                         
                    </div>  
                        </div>
                        
                        
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-2">
        <input type="hidden" id="notIn">
    <input type="submit" value="Save" class="btn dblink btn-block btn-sm" tabindex="1">
    </div>
  </div>
<?php echo $this->Form->end(); ?>
                    </div>
                  </div>
                     
	</div>
    
</div>
 