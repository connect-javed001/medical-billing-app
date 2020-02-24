<?php 
    echo $this->Html->css('datatable');
?>
<?php echo $this->Html->script('datatable', array('block' => 'scriptBottom'));  ?>
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
                    <div class="col-md-12 table-responsive">
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
                                        <?php
                                        if(!empty($datas)){
                                             $k=1;
                                             foreach($datas as $data){
                                        ?>    
                                           <tr> 
                                               <td><?php echo $k; ?></td>
                                               <td><?php echo $data['Invoice']['invoice_no'] ?></td>
                                               <td><?php echo $data['Invoice']['customer_name'] ?></td>
                                               <td><?php echo $data['Invoice']['total_price'] ?></td>
                                               <td><?php echo $data['Invoice']['date'] ?></td>
                                            
                                               <td>
                                                   <a class="color_black" title="Invoice Info" href='<?php echo HTTP_PATH.'invoiceInfo/'.$data['Invoice']['id']; ?>'><i class="fa fa-info-circle fa-2x"></i></a>
                                                   <a class="color_black" title="Delete" href='<?php echo HTTP_PATH.'invoiceDelete/'.$data['Invoice']['id']; ?>'><i class="fa fa-trash-o fa-2x"></i></a>
                                               </td>
                                           </tr> 
                                            <?php
                                             $k++;
                                             }
                                        }else{
                                        ?>    
                                           <tr><td  colspan="9">No Records found</td></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                     </div>
           
    </div>
<script>
$(document).ready(function(){
   $('.medList').DataTable();
});
</script>