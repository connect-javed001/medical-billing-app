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