
<div class="container-fluid">
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
      <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
		<div class="panel panel-default">
                    <div class="panel-heading black_heading"><i class="fa fa-user-plus"></i> Add Stock</div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Medicine',array('class'=>'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Name</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('name',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'Enter name'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Alias Name</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('alias_name',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'alias name'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Batch No.</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('batch_no',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'batch no'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Quantity</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('quantity',array('type'=>'number','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'Piece Quantity'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Piece price</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('piece_price',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control ','required'=>TRUE,'placeholder'=>'piece price'));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Date of Manufacturing</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('dom',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control date','required'=>TRUE,'placeholder'=>''));
                                                  ?>
                          </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-sm-4 control-label">Date of expiry</label>
                          <div class="col-md-8 col-sm-8">
                             <?php
                                                   echo $this->Form->input('doe',array('type'=>'text','label' => FALSE,
                                                       'class'=>'form-control date','required'=>TRUE,'placeholder'=>''));
                                                  ?>
                             <?php
                                                   echo $this->Form->input('id',array());
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
<?php echo $this->Form->end(); ?>
                    </div>
                  </div>
                     
	</div>
    
</div>
<script>
     $('.date').datepicker({
         changeMonth: true,
        changeYear: true,
        showButtonPanel: false,
        dateFormat: 'yy-mm-dd',
    });  
</script>