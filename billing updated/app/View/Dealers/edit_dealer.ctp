<?php 
// echo ""
?>

<div class="container-fluid">
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
      <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
		<div class="panel panel-default">
                    <div class="panel-heading black_heading"><i class="fa fa-user-plus"></i> Edit Dealer</div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Dealer',array('class'=>'form-horizontal')); ?>
                       
                        <div class="row">
                            <div class="col-md-12">
                                
                            
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Dealer name</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('name',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'dealer name'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Address</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('address',array('type'=>'textarea','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'address'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>  
                        
  
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-2">
    <input type="submit" value="Save" class="btn dblink btn-block btn-sm" tabindex="1">
    </div>
  </div>
<?php
 echo $this->Form->hidden('id');
 echo $this->Form->end(); ?>
                    </div>
                  </div>
                     
	</div>
    
</div>
