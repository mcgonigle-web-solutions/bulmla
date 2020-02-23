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

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg. To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * Module chrome for rendering the module in Hero Section
 */

function modChrome_hero( $module, &$params, &$attribs ) 
{
    echo '<section class="hero ' .$params->get( 'moduleclass_sfx' ) .'" >';

	echo '<div class="hero-body">';
	
	echo '<div class="container">';

	echo $module->content;

	echo '</div>';

	echo '</div>';
	
    echo '</section>';

  }

/*
 * Module chrome for rendering the module in aside-right
 */

function modChrome_aside( $module, &$params, &$attribs ) 
{
	
	echo '<div class="tile is-ancestor">';

	echo '<div class="tile is-parent">';

	echo '<div class="tile is-child p-lg '.$params->get( 'moduleclass_sfx' ) .'">';

	if ($module->showtitle) 
    {
      echo '<p class=" m-b-none '.$params->get( 'header_class' ) .'">' .$module->title .'</p>';
	}
	
	echo $module->content;
	
    echo '</div>';

	echo '</div>';

	echo '</div>';
  }


  function modChrome_tiles( $module, &$params, &$attribs ) 
{

	echo '<div class="tile '.$params->get( 'moduleclass_sfx' ) .'">';

	if ($module->showtitle) 
    {
      echo '<p class=" m-b-none '.$params->get( 'header_class' ) .'">' .$module->title .'</p>';
	}
	
	echo $module->content;
	
	echo '</div>';

  }

  function modChrome_level( $module, &$params, &$attribs ) 
  {
  
	  echo '<div class="level-item has-text-centered '.$params->get( 'moduleclass_sfx' ) .'">';
	  
	  echo $module->content;
	  
	  echo '</div>';
  
	}