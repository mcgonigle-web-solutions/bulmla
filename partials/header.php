<?php defined( '_JEXEC' ) or die( 'Restricted access' );

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$config = JFactory::getConfig();
$app  = JFactory::getApplication();
$user = JFactory::getUser();

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

// Use of Google Font
if ($this->params->get('googleFont'))
{
	$font = $this->params->get('googleFontName');

	// Handle fonts with selected weights and styles, e.g. Source+Sans+Condensed:400,400i
	$fontStyle = str_replace('+', ' ', strstr($font, ':', true) ?: $font);

	JHtml::_('stylesheet', 'https://fonts.googleapis.com/css?family=' . $font);
	$this->addStyleDeclaration("
	h1, .site-title {
		font-family: '" . $fontStyle . "', sans-serif;
	}");
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}

// Output as HTML5
$this->setHtml5(true);

// Set mobile compatibility
$document =& JFactory::getDocument();
$document->setMetaData('X-UA-Compatible', 'IE=edge', true);
$document->setMetaData('viewport', 'width=device-width, initial-scale=1.0');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/css/mystyle.css" type="text/css" />
<script src="https://kit.fontawesome.com/d70afb009a.js"></script>

</head>
