<?php
/**
 * @file elrte.php
 * @brief Containing Elrte class.
 *
 * Elrte plugin elrte.php
 * 
 * @author David Stutz
 * @version 1.0.0
 * @license GPLv3
 * @package elrte
 * @see http://sourceforge.net/projects/cmsimpleelrte/
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
/*! \mainpage CMSimple Elrte Editor
 *
 * This plugin provides the Elrte editor for usage in your CMSimple installation.
 * 
 * This is  a generated documentation of the plugin.
 * 
 * \mainpage
 */

/**
 * @class Elrte
 * 
 * Elrte class for generla informartion and script including.
 * 
 * @author David Stutz
 * @since 1.0.0
 * @package elrte
 */
class Elrte {
	
	/**
	 * Current version.
	 * 
	 * @var <string>
	 */
	const VERSION = '1.0.0beta1';
	
	/**
	 * @static
	 * @public
	 * Get plugin's name.
	 * 
	 * @return <string> name
	 */
	public static function name()
	{
		return "Elrte editor";
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's release date.
	 * 
	 * @return <string> release date.
	 */
	public static function release_date() 
	{
                return "27th October 2014";
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's author.
	 * 
	 * @return <string> author.
	 */
	public static function author()
	{
		return "David Stutz";
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's website.
	 * 
	 * @return <string> website link
	 */
	public static function github()
	{
		return '<a href="https://github.com/davidstutz/cmsimple-elrte" target="_blank">GitHub Repository</a>';
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's description.
	 * 
	 * @return <string> description
	 */
	public static function description()
	{
		return 'Elrte editor plugin.';
	}
	
	/**
	 * @static
	 * @public
	 * Legal notes on elfinder.
	 */
	public static function legal()
	{
		return '<q>elRTE is an open-source WYSIWYG HTML-editor written in JavaScript using jQuery UI. It features rich text editing, options for changing its appearance, style and many more. You can use it in any commercial or non-commercial projects.</q><br />'
			.'For more information see: <a href="https://github.com/Studio-42/elRTE" target="_blank">elRTE Website</a><br />'
			.'elRTE license: BSD - see <a href="http://en.wikipedia.org/wiki/BSD_licenses">Wikipedia</a><br />'
			.'JQuery and JQuery-UI license: MIT and GPL - see <a href="http://en.wikipedia.org/wiki/MIT_License">Wikipedia MIT License</a> - <a href="http://en.wikipedia.org/wiki/Gpl">Wikipedia GPL License</a><br />';
	}
	
	/**
	 * @static
	 * @public
	 * Include jquery.
	 * 
	 * @global hjs
	 * @global pth
	 * @global plugin
	 *
	 */
	public static function include_jquery()
	{
		global $pth, $hjs;
		
		static $jquery_included = FALSE;
		
		if (!$jquery_included)
		{
			$hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/jquery/js/jquery-1.7.1.min.js" type="text/javascript"></script>';
			$hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/jquery/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>';
			
			$jquery_included = TRUE;
		}
	}
	
	/**
	 * @static
	 * @public
	 * Includes all CSS and JS.
	 * 
	 * @global hjs
	 * @global plugin
	 * @global pth
	 * @global sl
	 */
	public static function include_elrte()
	{
		global $pth, $hjs, $sl;
		
		static $elrte_included = FALSE;
		
		if (!$elrte_included)
		{
			$hjs .= '<link type="text/css" href="' . $pth['folder']['plugins'] . 'elrte/elrte/css/elrte.full.css" rel="stylesheet" rel="stylesheet">';
			// $hjs .= '<link type="text/css" href="' . $pth['folder']['plugins'] . 'elrte/elfinder/css/elfinder.css" rel="stylesheet" rel="stylesheet">';

			$hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/elrte/js/elrte.full.js" type="text/javascript"></script>';
			// $hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/elfinder/js/elfinder.min.js" type="text/javascript"></script>';
			// $hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/elfinder/js/i18n/elfinder.'.$sl.'.js" type="text/javascript"></script>';
			$hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/elrte/js/i18n/elrte.' . $sl . '.js" type="text/javascript"></script>';
			
			$hjs .= '<script src="' . $pth['folder']['plugins'] . 'elrte/init.js" type="text/javascript"></script>';
			
			$elrte_included = TRUE;
		}
	}
}
