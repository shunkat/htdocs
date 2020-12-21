<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_URI extends CI_URI {

	function MY_URI()
	{
		parent::CI_URI();
	}

	//URIからパラメータを取得
	function get_rewrite_parameter($pattern = array()){
		if(!is_array($pattern)) return false;
		
		$matches = array();
		foreach($pattern as $key=>$val){
			unset($match);
			ereg($val,$this->ruri_string(),$match);
			$matches[$key] = ($match[1] != "") ? $match[1] : "";
		}
		return $matches;
	} 

	//URIからパラメータを取得
	function get_link_base($pattern = array()){
		
		if(!is_array($pattern)) return false;
		
		$matches = array();
		$ekey = '';
		$eval = '';
		foreach($pattern as $key=>$val){
			$prefix = substr($val,1,1);
			unset($match);
			ereg($val,$this->ruri_string(),$match);
			$ekey .= $prefix;
			$eval .= (($match[1] != "") ? $prefix.'_'.$match[1].'/' : "");
			$matches[$ekey] = $eval;
		}
		return $matches;
	} 

}
// END URI Class
?>