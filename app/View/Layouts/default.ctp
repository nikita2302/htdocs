<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->css('normalize');
		echo $this->Html->css('datepicker');
		echo $this->Html->script('jquery-1.7.1.min');
		echo $this->Html->script('jquery-ui-1.8.18.custom.min');
		echo $this->Html->script('datepick');
		echo $this->Html->script('state');
	?>
</head>
<body>
	<div id="container">
		<div id="header-wrapper">
			<div id="header">
		    	<div id="logoimg">
		    	  <a href="home"> 
		        	<?php echo $this->Html->image('clogo.png', array('width' => '130', 'height' => '90'));?>
		          </a>
		    	</div>
		    	<div id="logo1">
		       	 <h1 style="color:#C29C03">Web Portal</h1>
		    	</div>
		        <div id="logo2">
		       	 <h1 style="color:#FFF">Atlanta Community Court</h1>
		    	</div>		      
			</div>
		</div>	
		<div id="content-pane">
  			<div id="qlink">    
  				Quick Links      
  			</div>
			<div id = "link-options">
    			<ul>
        			<li> <a href="home">Home Page</a> </li>
        			<li> <a href="programlist">View Programs</a> </li>
        		</ul>
  			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	    <div id="footer">
	        <center>Copyright (c) 2014 Atlanta Community Court. All rights reserved.</center>
	    </div>
	</div>
</body>
</html>
