<?php
/**
 * @version		$Id: index.php 21720 2011-08-08 $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 1994 - 2011 Universitas Pelita Harapan. All rights reserved.
 * @license		GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
//JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
//$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jwplayer/jwplayer.js"></script>
		<style media="screen" type="text/css">
		  html, body {
			margin:0px;
			padding:0px;
			height: 100%;
			width: 100%;
			overflow: hidden;
		  }
		</style>
		
		<jdoc:include type="modules" name="googleanalytics" />
	</head>
	<body>
		<jdoc:include type="component" />
	</body>
</html>
