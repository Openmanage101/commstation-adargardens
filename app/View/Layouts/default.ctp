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

$cakeDescription = __d('cake_dev', 'Commstation - Adar Gardens');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->Html->image('adar_logo.png', array('alt' => 'Adar Gardens Logo')); ?> <p style="text-align: left; font-size: 160%;"><strong>Communications Schedule Manager</strong></p>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p style="font-size: 70%;">
				Powered by  
				<?php echo $this->Html->link(
                                        $this->Html->image('powered_openmanage.png', array('alt' => 'Powered By Openmanage', 'border' => '0')),
                                        'http://www.openmanage.co.za/',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
			</br> 
			<?php echo $this->Html->link(
                                        $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                                        'http://www.cakephp.org/',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
                        <?php echo $this->Html->link(
                                        $this->Html->image('powered_percona.png', array('alt' => 'Powered By Percona Server', 'border' => '0')),
                                        'http://www.percona.com/software/percona-server/',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
                        <?php echo $this->Html->link(
                                        $this->Html->image('powered_nginx.png', array('alt' => 'Powered By Nginx', 'border' => '0')),
                                        'http://nginx.com/',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
			</p>
			<p style="font-size: 60%; text-align: left;">
				v 0.0.1
			</p>
		</div>
	</div>
</body>
</html>
