
    <nav class="navbar navbar-inverse navbar-fixed-top header-nav">
      <!--<div class="container">-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a href="<?php echo HTTP_PATH.'home' ?>" class="navbar-brand" style="">
              <img src="<?php echo HTTP_PATH_IMG ?>/img/sofiya3.png"  class="" height="40px" width="200px"/>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-right mt10 nomarginR">
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle navlink navF" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-user"></i>
                         <?php 
                        if($this->Session->read('sa_uid')){
                                    echo $this->Session->read('sa_uname');
                        }
                        ?>
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li>
                          <?php echo $this->Html->link(
                                    'Change Password',
                                                     '/changePassword',
                                            array(
                                                'class'=>'color_blue navlink',
                                        'full_base' => true
                                    )
                                ); ?> 
                       </li>
                       <li>
                          <?php echo $this->Html->link(
                                    'Logout',
                                                     '/logout',
                                            array(
                                                'class'=>'color_blue navlink',
                                        'full_base' => true
                                    )
                                ); ?> 
                       </li>
                       
                          
                     </ul>
                   </li>
          </ul>
           
        </div>
      <!--</div>-->
    </nav>