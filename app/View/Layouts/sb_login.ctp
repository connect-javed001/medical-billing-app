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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo HTTP_PATH_IMG ?>/img/icon.png" />
	<?php
//		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		echo $this->Html->css('custom');
		echo $this->Html->css('demo');
		echo $this->Html->css('jquery-ui.min');
		echo $this->Html->css('jquery-ui.theme');
		echo $this->Html->css('jquery-ui.structure');
		echo $this->Html->css('font-awesome-4.6.3/css/font-awesome.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                echo $this->Html->script('jquery');
                echo $this->Html->script('bootstrap');
                echo $this->Html->script('jquery-ui');
                                            
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                   <?php //echo $this->element('admin_header') ?>
		</div>
                                            <div id="content" style="padding: 0px;margin-top: 33px">
			<?php echo $this->fetch('content'); ?>
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
