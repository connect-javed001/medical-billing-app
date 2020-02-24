      
<div class="container-fluid " style="">
    <div class="col-md-12 col-xs-12">
              <div class="leftflash">
                   <?php echo $this->Session->flash();?>
               </div>
      </div>  
                <div class="col-md-10 col-lg-9 col-sm-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading black_heading" style="">
                            <b>Change Password</b>
                        </div>
                              <?php echo $this->Form->create('User',array('class'=>'form-horizontal')); ?>
                            <div class="row">
                                  <div class="col-md-12">
                                     
                                        <div class="col-md-12 form-group mt20">
                                            <div class="col-md-4">
                                                  <label class=""> Enter Old Password</label>
                                            </div>
                                            <div class="col-md-8">
                                                
                                             <?php
                             echo $this->Form->input('oldPassword',array('type'=>'password','label' => FALSE,
                                 'class'=>'form-control input-lg','value'=>'','required'=>TRUE,'placeholder'=>'Enter old Password'));
                            ?>
                                            </div>
                                          
                                        </div>
                                        <div class="col-md-12 form-group mt20">
                                            <div class="col-md-4">
                                                  <label class=""> Enter New Password</label>
                                            </div>
                                            <div class="col-md-8">
                                                
                                             <?php
                             echo $this->Form->input('password',array('type'=>'text','label' => FALSE,
                                 'class'=>'form-control input-lg','value'=>'','required'=>TRUE,'placeholder'=>'Enter New Password'));
                             echo $this->Form->hidden('id');
                            ?>
                                            </div>
                                          
                                        </div>
                                   
                                 
                                        
                                        <div class="col-md-12 form-group mt20 mb20">
                                            <button type="submit" class="pull-right dblink btn">Submit</button>
                                        </div>
                                </div>
                            </div>
                             <?php echo $this->Form->end(); ?>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            
    </div>

 
