<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">

        <?php $this->Html->meta("keywords", "$title_for_layout", array("inline" => false)); ?>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
//		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		echo $this->Html->css('custom');
		echo $this->Html->css('demo');
		echo $this->Html->css('font-awesome-4.6.3/css/font-awesome.min');
		echo $this->Html->css('select2');
		echo $this->fetch('meta');
		echo $this->fetch('css');
                                            echo $this->fetch('script');
                                            echo $this->Html->script('jquery');
                                            echo $this->Html->script('bootstrap');
                                            echo $this->Html->script('script');
                                            echo $this->Html->script('owl.carousel');
                                            echo $this->Html->script('bootstrap-typeahead');
                                            echo $this->Html->script('select2.min');
                                            
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                                                    <?php // echo $this->element('header') ?>
		</div>
            <div id="content" style="padding: 0px;">
			<?php //echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
                   <?php // echo $this->element('footer') ?>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
    <script> 
        var httppath = "<?php echo HTTP_PATH ?>";
    </script>  
</body>
</html>
<?php
echo $this->fetch('scriptBottom');
echo $this->Js->writeBuffer(); 
?>
    
<div class="modal fade" id="alerMolel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default cls_ordr" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="errorModel" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>