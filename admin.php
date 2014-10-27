<?php
/**
 * @file admin.php
 * @brief Containing Elrte class,.
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

if (!defined('CMSIMPLE_XH_VERSION')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
 
if (!class_exists('Elrte')) require dirname(__FILE__)."/elrte.php";
 
if(isset($elrte))
{
	initvar('admin');
	initvar('action');
	
	$plugin = basename(dirname(__FILE__),"/");
	
	$o .= print_plugin_admin('on');
	
	if($admin != 'plugin_main')
	{
		$o .= plugin_admin_common($action,$admin,$plugin);
	}
	
	if ($action == '' OR $action == 'plugin_text')
	{
		$o .= '<p><b>'.Elrte::name().'</b></p>'
				. '<hr />'
				. '<p class="elrte-notice">'
                                    . 'Version: ' . Elrte::VERSION . '<br />'
                                . '</p>'
                                . '<p class="elrte-help">'
                                    . 'Released: ' . Elrte::release_date() . '<br />'
                                    . 'Author: ' . Elrte::author() . '<br />'
                                    . 'Website: ' . Elrte::github() . '<br />'
                                    . Elrte::description() . '<br />'
                                    . Elrte::legal() . '<br />'
				. '</p>';
	}
}
?>