 <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class=" text-center text-success">
                        <img src="<?php echo HTTP_PATH_IMG ?>/img/sofiya.png"  class="" height="40px" width="200px"/>
                    </h3>
                        <hr>
                        <h3 class="panel-title text-center">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('User',array('class'=>'form-horizontal')); ?>
                            <fieldset>
                                <div class="form-group">
                                                             <?php
                                                                     echo $this->Form->input('name',array('type'=>'text','placeholder'=>'User Name','label' => FALSE,'class'=>'form-control','required'=>TRUE,
                                                            ));
                                                          ?> 
                                </div>
                                <div class="form-group">
                                                           <?php
                                                                     echo $this->Form->input('password',array('type'=>'password','label' => FALSE,'placeholder'=>'password','class'=>'form-control','required'=>TRUE,
                                                            ));
                                                          ?> 
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" >  
                            </fieldset>
                                 <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>