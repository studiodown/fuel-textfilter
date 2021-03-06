<?php

/**
 * Text Filter
 *
 * The text filter package is a collection of filters meant to apply 
 * changes to your response output. However, it is by no means limited 
 * to that use. It can be used on any string value.
 *
 * @package    Text Filter
 * @version    1.0
 * @author     Ninjarite Development Group
 * @license    MIT License
 * @copyright  2011 Ninjarite Development
 */
Autoloader::add_core_namespace('TextFilter');

// Define available classes into the Autoloader
Autoloader::add_classes(array(
	'TextFilter\\Filter'                 => __DIR__.'/classes/filter.php',
	'TextFilter\\Filter_Acronym'         => __DIR__.'/classes/filter/acronym.php',
	'TextFilter\\Filter_BBCode'          => __DIR__.'/classes/filter/bbcode.php',
	'TextFilter\\Filter_Censor'          => __DIR__.'/classes/filter/censor.php',
	'TextFilter\\Filter_Highlight'       => __DIR__.'/classes/filter/highlight.php',
	'TextFilter\\Filter_Htmlpurifier'    => __DIR__.'/classes/filter/htmlpurifier.php',
	'TextFilter\\Filter_Markdown'        => __DIR__.'/classes/filter/markdown.php',
	'TextFilter\\Filter_Smileys'         => __DIR__.'/classes/filter/smileys.php',
	'TextFilter\\Filter_Stripper'        => __DIR__.'/classes/filter/stripper.php',
	'TextFilter\\Filter_Textile'         => __DIR__.'/classes/filter/textile.php',
	'TextFilter\\Filter_Truncate'        => __DIR__.'/classes/filter/truncate.php',

	'TextFilter\\FilterSet'              => __DIR__.'/classes/filterset.php',
));

/* End of file bootstrap.php */