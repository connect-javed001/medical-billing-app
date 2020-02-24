  
    <div class="container-fluid">
        <div class="col-md-12">
        
            <h3 class="page-header"><i class="fa fa-bank"></i> Dashboard</h3>
            <div class="col-md-12 col-xs-12">
                         <div class="leftflash">
                              <?php echo $this->Session->flash();?>
                          </div>
                 </div>
          <div class="row">
                        <?php echo $this->Html->link(
                                '<i class="fa fa-users"></i> Add Stock',
                                              '/addMed',
                                              array('class'=>'col-md- 3 col-sm-3 col-xs-12 btn ml60 dblink', 'full_base' => true,'escape' => false)
                            ); ?>
                    <?php echo $this->Html->link(
                            '<i class="fa fa-calendar-plus-o"></i> Generate Invoice',
                                          '/invoiceGenerate',
                                          array('class'=>'col-md- 3 col-sm-3 col-xs-12 btn  ml60 dblink', 'full_base' => true,'escape' => false)
                        ); ?>              
                             
            </div>

      </div>
        
        
      
    </div>