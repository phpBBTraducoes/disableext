<?php
/**
*
* @package Disable Extensions
* @copyright (c) 2017 david63
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.0] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DISABLE_EXTENSIONS'		=> 'Desativar todas as extensões',
	'DISABLE_EXTENSIONS_LOG'	=> array(
		0 => '<strong>Nenhuma extensão para ser desativada</strong>',
		1 => '<strong>%1$s de %2$s extensão desativada</strong>',
		2 => '<strong>%1$s de %2$s extensões desativadas</strong>',
	),
	'DISABLE_UNABLE_LOG'		=> '<strong>Não é possível desativar quaisquer extensões</strong>'
));
