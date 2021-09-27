<?php
/**
 * @version		$Id: index.php 21720 2011-08-08 $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 1994 - 2011 Universitas Pelita Harapan. All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->params->get('maintemplate', 'uph-faculty1') ?>/js/jquery-min.js"></script>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->params->get('maintemplate', 'uph-faculty1') ?>/css/template_main.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		
		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->params->get('maintemplate', 'uph-faculty1') ?>/js/template.js"></script>
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->params->get('maintemplate', 'uph-faculty1') ?>/css/template_ie7.css" type="text/css" />
		<![endif]-->
		
		<jdoc:include type="modules" name="googleanalytics" />
	</head>
	<body>
		<div class="full-header clearfix">
			<div class="container">
				<div class="top-header">
					<jdoc:include type="modules" name="header1" />
					<div class="span-4">
						<jdoc:include type="modules" name="language1" />
						<jdoc:include type="modules" name="search1" />
						<jdoc:include type="modules" name="follow3" />
					</div>
				</div>
			</div>
		
	<?php if ($this->params->get('mainmenu', 'menu1') == 'menu2') : ?>
			<div class="container container-menu">
				<div id="top-menu2" class="top-menu2">
					<jdoc:include type="modules" name="topmenu2" />
				</div>
			</div>
	<?php else : ?>
			<div class="container container-menu">
				<div class="top-menu">
					<div class="top-menu-inside">
						<jdoc:include type="modules" name="topmenu1" />
					</div>
				</div>
			</div>
	<?php endif; ?>
		</div>
		<div class="clear"></div>
		
		<div class="full-container full-inside">
	<?php if ($this->params->get('mainmenu', 'menu1') == 'menu2') : ?>
			<div class="container">
				<div id="top-sub-menu2" class="top-sub-menu2 hide">
					<div id="expanded-menu2">
						<jdoc:include type="modules" name="submenu2" layout="top-sub-menu" />
					</div>
				</div>
				<div class="clear"></div>
				<jdoc:include type="modules" name="expandedmenu2" layout="expanded-menu" />
			</div>
	<?php endif; ?>
			<div class="container content-inside" id="main-content">
				<div class="row-1 bottom-1">
					<div id="main-content-2">
						<div class="col-1">
							<div class="component">
								<jdoc:include type="component" />
							</div>
						</div>
						<div class="col-2">
						<?php if ($this->params->get('showmenu', 1) == 1) : ?>
							<jdoc:include type="modules" name="activemenu1" layout="active-menu" />
						<?php endif; ?>
						<?php if ($this->params->get('showatuph', 0) == 1) : ?>
							<jdoc:include type="modules" name="atuph1" />
						<?php endif; ?>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="full-footer">
			<div class="container">
				<jdoc:include type="modules" name="footermenu1" layout="footer-menu" />
			</div>
		</div>
	</body>
</html>
