/**
 * @file init.js
 * @brief Containing additional Elrte initialization options and cusotm toolbar options.
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

/**
 * The following mapping defines which button opens which folder in filebrowser.
 * 
 * Possible button:
 * - flash
 * - image
 * - elfinder
 */
elRTE.prototype.options.folders = {
	flash : 'media', // $cf['folders']['media'] will be used for flash button.
	image : 'images', // $cf['folders']['images'] will be used for image button.
	elfinder : 'userfiles', // $cf['folders']['elfinder'] will be used for elfinder/filebrowser button.
	link: 'userfiles', // $cf['folders']['link'] will be sued for email button.
}

/**
 * Buttons
 * 	'copy'                : 'Copy',
 * 	'cut'                 : 'Cut',
 * 	'css'                 : 'Css style and class',
 * 	'paste'               : 'Paste',
 * 	'pastetext'           : 'Paste only text',
 * 	'pasteformattext'     : 'Paste formatted text',
 * 	'removeformat'        : 'Clean format', 
 * 	'undo'                : 'Undo last action',
 * 	'redo'                : 'Redo previous action',
 * 	'bold'                : 'Bold',
 * 	'italic'              : 'Italic',
 * 	'underline'           : 'Underline',
 * 	'strikethrough'       : 'Strikethrough',
 * 	'superscript'         : 'Superscript',
 * 	'subscript'           : 'Subscript',
 * 	'justifyleft'         : 'Align left',
 * 	'justifyright'        : 'Ailgn right',
 * 	'justifycenter'       : 'Align center',
 * 	'justifyfull'         : 'Align full',
 * 	'indent'              : 'Indent',
 * 	'outdent'             : 'Outdent',
 * 	'rtl' : 'Right to left',
 * 	'ltr' : 'Left to right',
 * 	'forecolor'           : 'Font color',
 * 	'hilitecolor'         : 'Background color',
 * 	'formatblock'         : 'Format',
 * 	'fontsize'            : 'Font size',
 * 	'fontname'            : 'Font',
 * 	'insertorderedlist'   : 'Ordered list',
 * 	'insertunorderedlist' : 'Unordered list',
 * 	'horizontalrule'      : 'Horizontal rule',
 * 	'blockquote'          : 'Blockquote',
 * 	'div'                 : 'Block element (DIV)',
 * 	'link'                : 'Link',
 * 	'unlink'              : 'Delete link',
 * 	'anchor'              : 'Bookmark',
 * 	'image'               : 'Image',
 * 	'pagebreak'           : 'Page break',
 * 	'smiley'              : 'Smiley',
 * 	'flash'               : 'Flash',
 * 	'table'               : 'Table',
 * 	'tablerm'             : 'Delete table',
 * 	'tableprops'          : 'Table properties',
 * 	'tbcellprops'         : 'Table cell properties',
 * 	'tbrowbefore'         : 'Insert row before',
 * 	'tbrowafter'          : 'Insert row after',
 * 	'tbrowrm'             : 'Delete row',
 * 	'tbcolbefore'         : 'Insert column before',
 * 	'tbcolafter'          : 'Insert column after',
 * 	'tbcolrm'             : 'Delete column',
 * 	'tbcellsmerge'        : 'Merge table cells',
 * 	'tbcellsplit'         : 'Split table cell',
 * 	'docstructure'        : 'Toggle display document structure',
 * 	'elfinder'            : 'Open file manager',
 * 	'fullscreen'          : 'Toggle full screen mode',
 * 	'nbsp'                : 'Non breakable space',
 * 	'stopfloat'           : 'Stop element floating',
 * 	'about'               : 'About this software'
 * 
 * Predefined toolbars:
 * 	eol        : [], // special panel, insert's a new line in toolbar
 * 	save       : ['save'],
 * 	copypaste  : ['copy', 'cut', 'paste', 'pastetext', 'pasteformattext', 'removeformat', 'docstructure'],
 * 	undoredo   : ['undo', 'redo'],
 * 	style      : ['bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript'],
 * 	colors     : ['forecolor', 'hilitecolor'],
 * 	alignment  : ['justifyleft', 'justifycenter', 'justifyright', 'justifyfull'],
 * 	indent     : ['outdent', 'indent'],
 * 	format     : ['formatblock', 'fontsize', 'fontname'],
 * 	lists      : ['insertorderedlist', 'insertunorderedlist'],
 * 	elements   : ['horizontalrule', 'blockquote', 'div', 'stopfloat', 'css', 'nbsp', 'smiley', 'pagebreak'],
 * 	direction  : ['ltr', 'rtl'],
 * 	links      : ['link', 'unlink', 'anchor'],
 * 	images     : ['image'],
 * 	media      : ['image', 'flash'],		
 * 	tables     : ['table', 'tableprops', 'tablerm',  'tbrowbefore', 'tbrowafter', 'tbrowrm', 'tbcolbefore', 'tbcolafter', 'tbcolrm', 'tbcellprops', 'tbcellsmerge', 'tbcellsplit'],
 * 	elfinder   : ['elfinder'],
 * 	fullscreen : ['fullscreen', 'about']
 */

/**
 * Create as much panels as you want.
 */
elRTE.prototype.options.panels.custom_panel_1 = [
    'save',
    'cut',
    'copy',
    'pastetext',
    'pasteformattext',
    'removeformat',
    'undo',
    'redo',
    'elfinder',
    'fullscreen',
];

elRTE.prototype.options.panels.custom_panel_2 = [
	'formatblock',
    'fontsize',
    'fontname',
];

elRTE.prototype.options.panels.custom_panel_3 = [
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'superscript',
    'subscript',
    'forecolor',
    'hilitecolor',
    'indent',
    'outdent',
    'justifyleft',
    'justifyright',
    'justifycenter',
    'justifyfull',
    'insertorderedlist',
    'insertunorderedlist',
    'horizontalrule',
    'link',
    'image',
    'flash'
];

elRTE.prototype.options.panels.custom_panel_4 = [
    'table',
	'tablerm',
	'tableprops',
	'tbcellprops',
	'tbrowbefore',
	'tbrowafter',
	'tbrowrm',
	'tbcolbefore',
	'tbcolafter',
	'tbcolrm',
	'tbcellsmerge',
	'tbcellsplit',
];

/**
 * Select panels for toolbar.
 */
elRTE.prototype.options.toolbars.custom = [
	'save',
	'copypaste',
	'undoredo',
	'elfinder',
	'format',
	'eol',
	'style',
	'colors',
	'alignment',
	'lists',
	'links',
	'media',
	'tables'
];