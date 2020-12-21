<?php

class MY_Validation extends CI_Validation
{

	function min_length($str, $val)
	{
		$CI =& get_instance();

		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}
	
		return (mb_strlen($str, $CI->config->item('charset')) < $val) ? FALSE : TRUE;
	}


	function max_length($str, $val)
	{
		$CI =& get_instance();

		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}
		return (mb_strlen($str, $CI->config->item('charset')) > $val) ? FALSE : TRUE;
	}

}

?>
