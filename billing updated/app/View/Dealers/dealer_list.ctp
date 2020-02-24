<?php 
    echo $this->Html->css('datatable');
?>
<?php echo $this->Html->script('datatable', array('block' => 'scriptBottom'));  ?>

<div class="container-fluid" style="">
     
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
            <!-- Right Content (Change to col-md-10 if left sidebar enabled) -->
                <div class="col-md-12">
                    <div class="well well-sm">
                        <span><i class="fa fa-list-ul"></i> Dealer List</span>
                        
                        <?php echo $this->Html->link(
                                '<i class="fa fa-user-plus"></i> Add Dealer',
                                '/addDeal',
                                array('class' => 'btn dblink btn-sm pull-right','escape'=>false)
                       ); ?>
                        
                    </div>
                </div>
                    <div class="col-md-12 table-responsive">
                            <table class="table medList table-striped table-bordered table-hover ">
                                    <thead>
                                        <tr>
                                            <th>##</th>
                                            <th>Name</th>
                                            <th>Address</th>                                 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                             $grand_total= 0;
                                        if(!empty($datas)){
//                                            
//                                            debug(strtotime(date('Y-m-d')));
//                                            exit;
                                             $k=1;
                                        
                                             foreach($datas as $data){
                                               
                                                
                                        ?>    
                                        <tr> 
                                               <td ><?php echo $k; ?></td>
                                               <td><?php echo $data['Dealer']['name'] ?></td>
                                               <td><?php echo $data['Dealer']['address'] ?></td>
                                            
                                               <td>
                                                   <a class="color_black" title="Edit" href='<?php echo HTTP_PATH.'editDeal/'.$data['Dealer']['id']; ?>'><i class="fa fa-edit fa-2x"></i></a>
                                                   <a class="color_black" title="Delete" href='<?php echo HTTP_PATH.'dealDelete/'.$data['Dealer']['id']; ?>'><i class="fa fa-trash-o fa-2x"></i></a>
                                               </td>
                                           </tr> 
                                            <?php
                                             $k++;
                                             } ?>
                                           
                                       <?php  }else{
                                        ?>    
                                           <tr><td  colspan="9">No Records found</td></tr>
                                        <?php } ?>
                                           
                                    </tbody>
                                    <?php if($grand_total>0){ ?>
                                        <tr>
                                               <td colspan="7"><i><b>Grand Total</b></i></td>
                                               <td colspan="3"><b><?php echo $grand_total; ?></b></td>
											   
                                           </tr>
                                    <?php } ?>
                                </table>
                     </div>
           
    </div>
<script>
$(document).ready(function(){
   $('.medList').DataTable();
});
</script>