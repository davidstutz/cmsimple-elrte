<?php
/**
 * @file config.php
 * @brief Containing configuration of the plugin.
 */

	/**
	 * Used toolbar.
	 * - tiny: only buttons to change text style (bold, italic, underline, strike, subscript, superscript)
         * - compact: the same as tiny + save, undo/redo, text alignment, list, link, fullscreen
         * - normal: compact + copy/paste, colors, paddings, block-elemet, images
         * - complete: normal + text size, style and font formating
         * - maxi: complete + tables
	 * - custom: custom toolbar defined in init.js
	 * 
	 * @var <string>
	 */
	$plugin_cf['elrte']['toolbar']="custom";

?>