<?php 
echo $this->Html->css('jquery-ui.min');
?>
<?php echo $this->Html->script('jquery-ui', array('block' => 'scriptBottom'));  ?>
<?php echo $this->Html->script('jQuery.print', array('block' => 'scriptBottom'));  ?>
<div class="container-fluid mt20" style="">
                <div class="col-md-12 mainbody">
                    <div class="panel panel-default" id="ele1">
                        <div class="panel-body">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 nopaddingL">
                                         <div class="col-md-12 col-sm-12 col-xs-12 nopaddingL">
                                                <a class="navbar-brand" style="">
                                                                                  <img src="<?php echo HTTP_PATH_IMG ?>/img/sofiya.png"  class="" height="40px" width="200px"/>
                                                                              </a>
                                              </div>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                            <div class="pull-left text-left mt5 ml5">
                                                <?php $date = date('d F Y', strtotime($invoice_data['Invoice']['date'])); ?>
                                                 <p><b>Invoice  No -: </b> <span><?php echo $invoice_data['Invoice']['invoice_no'] ?></span></p>
                                                          <p><b>Date -: </b> <span><?php echo  $date; ?></span></p>

                                            </div>
                                           </div>
                                        
                                                      
                                                      
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right nopaddingR">
                                           <div class="col-md-12 col-sm-12 col-xs-12 mt10">
                                               <h5><b>Address:</b></h5>
                                               <h5>
                                                                Near pithisaria kuwa , ward no.3<br>
                                                              City -  Churu (331001) <br/>State - Rajasthan
                                                            </h5>
                                        <i class="fa fa-mobile">+ <b>91 7878188887</b></i>
                                           </div>
                                         
                                       <?php ?>
                                    </div>
                                </div>
                         </div>  
                        <hr class="nomargin">
                        <!-- /.panel-heading -->
                        <div class="panel-body ">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <p><b>Customer Name -: </b> <span><?php echo $invoice_data['Invoice']['customer_name'] ?></span></p>
                                <table class="mt20 table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">##</th>
                                            <th class="text-center" style="width: 30%">Medicine Name</th>
                                            <th class="text-center" style="width: 20%">Quantity </th>
                                            <th class="text-center" style="width: 20%">Piece rate <small><i>(per piece)</i></small></th>
                                            <th class="text-center" style="width: 10%">Vat</th>
                                            <th class="text-center" style="width: 20%">Amount <small><i>(in INR)</i></small></th>
                                        </tr>
                                    </thead>
                                         <tbody>
                                        <?php
                                        $counter=1;
                                        $total_amt=0;
                                        foreach($invoice_data['InvoiceItem'] as $data){
//                                            debug($data);exit;
                                                $total_amt = $total_amt+$data['InvoiceItem']['total_price'];
                                        ?>
                                        <tr class="odd gradeX text-center">
                                            <td><?php echo $counter++ ; ?></td>
                                            <td><?php echo $data['Medicine']['name']; ?></td>
                                            <td><?php echo $data['InvoiceItem']['sale_quantity']; ?></td>
                                            <td><?php echo $data['InvoiceItem']['piece_price']; ?></td>
                                            <td><?php echo '0%'; ?></td>
                                            <td><?php echo $data['InvoiceItem']['total_price']; ?></td>
                                        </tr>
                                       <?php }   ?>                                                                              
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            <td colspan="5">
                                                <label> Total Amount :-</label>
                                            </td>
                                            <td>
                                                 <label><i class="fa fa-rupee"></i>  <?php echo $total_amt; ?></label>
                                            </td>
                                        </tr>
                                    </tfoot>   
                                </table>
                                <div class="pull-right form-group">
                                      
                                </div>
                            </div>
                            <!-- /.table-responsive -->                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!--<input type="button" class="btn btn-info pull-right" value="Print">-->
                    <a  class="btn pull-right ml5 dblink" href="<?php echo HTTP_PATH.'invoiceList' ?>">Back</a>
                    <button  class="btn  pull-right dblink" onclick="jQuery('#ele1').print()" id="print" onclick="">Print</button>
                </div>
               
    </div>

<style>
    .mainbody{
        font-size:13px; 
    }
</style>
    