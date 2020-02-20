<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.bulmla
 *
 * @author     Patrick McGonigle <patrick@mcgonigle.dev>
 * @copyright  McGonigle
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       www.mcgonigle.dev
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplBulmlaHelper::loadCss();
tplBulmlaHelper::loadJs();
tplBulmlaHelper::setMetadata();


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<script src="https://kit.fontawesome.com/d70afb009a.js"></script>
</head>
<body class="<?php echo tplBulmlaHelper::setBodySuffix(); ?>">

<?php echo tplBulmlaHelper::setAnalytics(0, 'your-analytics-id'); ?>

<a href="<?php echo $this->baseurl; ?>/">
    <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
    <?php endif; ?>
</a>

<nav class="navbar container" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
	<a class="logo" href="">
	<jdoc:include type="modules" name="logo" style="none" />
	</a>
	<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="Menu">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
	</a>
	</div>
	<div id="Menu" class="navbar-menu">
	<jdoc:include type="modules" name="navigation" style="none" class="navbar" />
	<div class="navbar-end">
	<div class="navbar-item">
	<div class="field is-grouped">
	<jdoc:include type="modules" name="navigationButtons" style="none" />	
	</div>
	</div>
	</div>
	</div>
</nav>

<?php if ($this->countModules( 'hero' )) : ?>
<jdoc:include type="modules" name="hero" style="hero" />
<?php endif; ?>

<section class="m-t-lg">
	<div class="container">
		<div class="tile is-ancestor">
			<?php if ($this->countModules( 'tiles' )) : ?>
		<jdoc:include type="modules" name="tiles" style="tiles" />
		<?php endif; ?>
		</div>
	</div>
</section>

<section >
	<div class="level container">
		<?php if ($this->countModules( 'level-left' )) : ?>
		<jdoc:include type="modules" name="level-left" />
		<?php endif; ?>
		<?php if ($this->countModules( 'level-right' )) : ?>
		<jdoc:include type="modules" name="tiles" style="none" />
		<?php endif; ?>
	</div>
</section>

<main id="main" class="container">
<jdoc:include type="message" />
<div class="columns">
	<div class="column is-three-quarters">
	<jdoc:include type="component"/>
	</div>
	<div class="column">
<?php if ($this->countModules('aside-right')) : ?>
	<jdoc:include type="modules" name="aside-right" style="asideRight" />
<?php endif; ?>
</aside>
	</div>
</div>

</main>

<?php 
/** Footer */
?>

<footer class="footer">
<div class="content has-text-centered">
<p>&copy; <?php echo date('Y'); ?> <?php echo tplBulmlaHelper::getSitename(); ?></p>
<p>
<strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
<a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
</p>
</div>
</footer>


<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
