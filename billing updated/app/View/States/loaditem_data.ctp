   <?php
    if(!empty($data)){
    ?>
<tr class="itemData" id="divId<?php echo $data['Medicine']['id']; ?>">
    <td>1.</td>
    <td><?php echo $data['Medicine']['name']; ?></td>
    <td>
     <?php
        echo $this->Form->input('InvoiceItem.quantity.',array('label' => FALSE,'required'=>TRUE,'value'=>'1','class'=>'quantity form-control'));
     ?> 
        </td>
    <td>
     <?php
        echo $this->Form->input('InvoiceItem.piece_price.',array('label' => FALSE,'required'=>TRUE,'readonly'=>true,'value'=>$data['Medicine']['piece_price'],'class'=>'piece_price form-control'));
     ?> 
     <?php
        echo $this->Form->hidden('InvoiceItem.medicine_id.',array('value'=>$data['Medicine']['id']));
     ?> 
        </td>
        <td> <a divId="<?php echo $data['Medicine']['id']; ?>" class="remove" href="#"><i class="fa fa-remove"></i></a></td>
</tr>

    <?php } ?>