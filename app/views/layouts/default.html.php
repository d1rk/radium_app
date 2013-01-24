<!DOCTYPE html>
<html class="<?= \lithium\core\Environment::get(); ?>">
<head>
	<?= $this->_render('element', 'head', array(), array('library' => 'li3_bootstrap')); ?>
</head>
<body class="app">
	<?= $this->_render('element', 'topnav', array(), array('library' => 'li3_bootstrap')); ?>
	<div class="container">
		<header id="header">
			<?= $this->_render('element', 'header', array(), array('library' => 'li3_bootstrap')); ?>
		</header>
		<div id="content">
			<?= $this->content(); ?>
		</div>
		<footer id="footer">
			<?= $this->_render('element', 'footer', array(), array('library' => 'li3_bootstrap')); ?>
		</footer>
	</div>
	<?= $this->_render('element', 'bottom', array(), array('library' => 'li3_bootstrap')); ?>
</body>
</html>