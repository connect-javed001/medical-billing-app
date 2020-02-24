<?php 
//debug($params);
?>    
<ul class="nav nav-sidebar">
        <li class="active"><a href="#"><i class="fa fa-th-large"></i> Menu</a></li>
               <li class="<?php echo ($params=='home'?'active':''); ?>">
                <?php echo $this->Html->link(
        '<i class="fa fa-home"></i> <strong>Home</strong>',
        '/home',
        array('class' => 'color_black navlink', 'escape' => false)
    ); ?>
                    </li>
             <li class="dropdown <?php echo ($params=='medList' || $params=='addMedicine'?'active':''); ?>">
                 <a class="dropdown-toggle color_black" data-toggle="dropdown" href="#"><i class="fa fa-database"></i> <strong>Stock</strong>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li> <?php echo $this->Html->link('<i class="fa fa-list-ol"></i> Stock List','/medList',
                        array(
                                    'class'=>'color_black navlink',
                                    'full_base' => true, 'escape' => false
                       )
            ); ?></li>
                  <li> <?php echo $this->Html->link('<i class="fa fa-plus-square"></i> Add Stock','/addMed',
                array(
                            'class'=>'color_black navlink',
                            'full_base' => true, 'escape' => false
               )
    ); ?></li>
                
                </ul>
             </li>         
             <li class="dropdown <?php echo ($params=='makeInvoice' || $params=='invoiceList'?'active':''); ?>">
                 <a class="dropdown-toggle color_black" data-toggle="dropdown" href="#"><i class="fa fa-bar-chart"></i> <strong>Invoice</strong>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li> <?php echo $this->Html->link('<i class="fa fa-list-ol"></i> Invoice List','/invoiceList',
                        array(
                                    'class'=>'color_black navlink',
                                    'full_base' => true, 'escape' => false
                       )
            ); ?></li>
                  <li> <?php echo $this->Html->link('<i class="fa fa-user-plus"></i> Generate Invoice','/invoiceGenerate',
                array(
                            'class'=>'color_black navlink',
                            'full_base' => true, 'escape' => false
               )
    ); ?></li>
                
                </ul>
             </li>         
              
           
          </ul>
 
          
         