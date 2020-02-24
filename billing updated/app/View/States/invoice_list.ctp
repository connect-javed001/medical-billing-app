<?php 
    echo $this->Html->css('datatable');
?>
<?php echo $this->Html->script('datatable', array('block' => 'scriptBottom'));  ?>
<?php echo $this->Html->script('invoiceList', array('block' => 'scriptBottom'));  ?>
<?php 
//debug($datas);exit;
?>
<div class="container-fluid" style="">
     
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
            <!-- Right Content (Change to col-md-10 if left sidebar enabled) -->
                <div class="col-md-12">
                    <div class="well well-sm">
                        <span><i class="fa fa-list-ul"></i> Invoice List</span>
                        
                        <?php echo $this->Html->link(
                                '<i class="fa fa-user-plus"></i> Generate Invoice',
                                '/invoiceGenerate',
                                array('class' => 'btn dblink btn-sm pull-right','escape'=>false)
                       ); ?>
                        
                    </div>
                </div>
<!--                <div class="col-md-offset-7 col-md-5">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-md-5 col-sm-5 control-label">Filter By Date : </label>
                          <div class="col-md-7 col-sm-7">
                              <input type="text" class="form-control" placeholder="from date" id="date">
                          </div>
                        </div>
                </div>-->
                 <hr>
                    <div class="col-md-12 table-responsive mt20">
                            <table class="table medList table-striped table-bordered table-hover ">
                                    <thead>
                                        <tr>
                                            <th>##</th>
                                            <th>Invoice No</th>
                                            <th>Customer Name</th>
                                            <th>Total price</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                      
                                    </tbody>
                                </table>
                     </div>
           
    </div>
<script>

</script>