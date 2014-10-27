<?php
/**
 * @file init.php
 * @brief Containing Elrte class.
 *
 * Pictures plugin index.php
 * 
 * @author David Stutz
 * @version 1.0.0
 * @license GPLv3
 * @package elrte
 * @see http://sourceforge.net/projects/cmsimplepictures/
 * 
 *  This file is part of the elrte editor plugin for CMSimple.
 *
 *  The plugin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The plugin is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  @see <http://www.gnu.org/licenses/>.
 */

if (!class_exists('Elrte')) require dirname(__FILE__) . "/elrte.php";

/**
 * Initialize editor.
 * 
 * @param <array> classes
 * @param init
 * 
 * @global pth
 * @global plugin
 * @global plugin_cf
 * @global hjs
 * @global sl
 * @global plugin_tx
 * @global cf
 */
function init_elrte($classes, $init = FALSE)
{
	global $pth, $plugin_cf, $hjs, $sl, $plugin_tx, $cf;
	
	/* Add default editor. */
	if (FALSE === array_search('xh-editor', $classes))
	{
		$classes[] = 'xh-editor';
	}
	
	$classes = implode(', .', $classes);
	
	if (file_exists($pth['folder']['plugins'] . 'jquery/jquery.inc.php')
                AND !function_exists('include_jQuery'))
	{
		include_once($pth['folder']['plugins'] . 'jquery/jquery.inc.php'); 
	}
	
	/* Use JQuery plugin if possible. */
	if(!function_exists('include_jQuery'))
	{
		/* Include JQuery and JQuery UI. */
		Elrte::include_jquery();
	}
	else
	{
		/* Include JQuery. */
		include_jQuery();
		
		/* Include JQuery UI. */
		include_jQueryUI();
	}
	
	/* Include Elrte. */
	Elrte::include_elrte();
	
	if (empty($cf['filebrowser']['external']))
	{
		$cf['filebrowser']['external'] = 'elfinder';
	}
	
	$connector = CMSIMPLE_BASE . 'plugins/' . $cf['filebrowser']['external'] . '/connectors/elrte/elrte.php';
	$init = $cf['filebrowser']['external'] . '_elrte_init';
	
	include_once $connector;
	$filebrowser_callback = $init();
	
	/* Initialize editor. */
	$hjs .= '<link type="text/css" href="' . $pth['folder']['plugins'] . 'elrte/jquery/css/smoothness/jquery-ui-1.8.13.custom.css" rel="stylesheet">';
	$hjs .= '<script type="text/javascript">
			$().ready(function() {
				' . $filebrowser_callback . '
				$(".' . $classes . '").elrte({
					lang         : "' . $sl . '",
					toolbar      : "' . $plugin_cf['elrte']['toolbar'] . '",
					fmAllow		 : true,
					fmOpen		 : elrte_filebrowser_callback,
				});
			});
			</script>';
}
