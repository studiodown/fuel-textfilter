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
namespace TextFilter;

/**
 * Filter: Censor bad words, or replace them with *'s
 *
 * @package    Text Filter
 * @author     Frank Bardon Jr. <frank@nerdsrescue.me>
 * @version    1.0
 */
class Filter_Censor {

	/**
	 * Process the input and return processed string
	 *
	 * @param  string Incoming string
	 * @param  array  Configuration array
	 * @return string Formatted string
	 */
	public function process($output, $config = array())
	{
		$words   = $config['words'];
		$replace_char = $config['replace_with'];

		if($config['boundary']){
			$regex = '/\b('.implode('|',$words).')\b/ie';
		}else{
    		$regex = '/('.implode('|',$words).')/ie';
		}
		
		if ($config['replace_words'])
		{
			return preg_replace('/\b('.implode('|',$words).')\b/ie', 'str_repeat($replace_char, strlen($1))', $output);
		}else{
    		return $output;
		}		
		
		
	}
}

/* End of file: censor.php */