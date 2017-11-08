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
	'ARE_YOU_SURE'					=> array(
		1 => 'Está certo que quer desativar %1$s extensão?',
		2 => 'Está certo que quer desativar %1$s extensões?',
	),

	'CONTINUE'						=> 'Continue',

	'DISABLE_COUNT'					=> array(
		1 => 'Você irá desativar %1$s extensão.',
		2 => 'Você irá desativar %1$s extensões.',
	),
	'DISABLE_EXTENSTIONS'			=> 'Desativar todas as extensões',
	'DISABLE_EXTENSTIONS_EXPLAIN'	=> 'Esta extensão irá desativar todas as extensões. Ela não irá excluir dados associados com as extensões e você poderá reativar novamente em <strong>“Personalização”</strong>.<br /><br />Se você quiser remover uma extensão então após desativa-la você <strong>deve</strong> “Excluir dados” da extensão <strong>antes</strong> de excluir os arquivos.',

	'EXTENSIONS_DISABLED'			=> array(
		0 => 'Nenhuma extensão foi desativada',
		1 => '%1$s extensão foi desativada',
		2 => '%1$s extensões foram desativadas',
	),

	'NO_EXT_DATA'					=> 'Não há extensões para desativar',
	'NO_EXT_UNABLE'					=> 'Não é possível desativar quaisquer extensões',

	'VERSION'						=> 'Versão',
));
