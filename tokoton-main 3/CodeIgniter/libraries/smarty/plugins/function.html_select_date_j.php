<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty {html_select_date_j} plugin
 *
 * forked from html_select_date
 */
function smarty_function_html_select_date_j($params, &$smarty)
{
    require_once $smarty->_get_plugin_filepath('shared','escape_special_chars');
    require_once $smarty->_get_plugin_filepath('shared','make_timestamp');
    require_once $smarty->_get_plugin_filepath('function','html_options');
    /* Default values. */
    $prefix          = "Date_";
    $start_year      = strftime("%Y");
    $end_year        = $start_year;
    $display_days    = true;
    $display_months  = true;
    $display_years   = true;
    $month_format    = "%m";
    /* Write months as numbers by default  GL */
    $month_value_format = "%m";
    $month_numeric_format = "%02d";
    $month_value_numeric_format = "%d";
    $day_format      = "%02d";
    /* Write day values using this format MB */
    $day_value_format = "%d";
    $year_as_text    = false;
    /* Display years in reverse order? Ie. 2000,1999,.... */
    $reverse_years   = false;
    /* Should the select boxes be part of an array when returned from PHP?
       e.g. setting it to "birthday", would create "birthday[Day]",
       "birthday[Month]" & "birthday[Year]". Can be combined with prefix */
    $field_array     = null;
    /* <select size>'s of the different <select> tags.
       If not set, uses default dropdown. */
    $day_size        = null;
    $month_size      = null;
    $year_size       = null;
    /* Unparsed attributes common to *ALL* the <select>/<input> tags.
       An example might be in the template: all_extra ='class ="foo"'. */
    $all_extra       = null;
    /* Separate attributes for the tags. */
    $day_extra       = null;
    $month_extra     = null;
    $year_extra      = null;
    /* Order in which to display the fields.
       "D" -> day, "M" -> month, "Y" -> year. */
    $field_order     = 'YMD';
    /* String printed between the different fields. */
    $field_separator = "\n";
    $time = time();
    $all_empty       = null;
    $day_empty       = null;
    $month_empty     = null;
    $year_empty      = null;
    $extra_attrs     = '';
	
	$display_ymd = false;
	
    foreach ($params as $_key=>$_value) {
        switch ($_key) {
            case 'prefix':
            case 'time':
            case 'start_year':
            case 'end_year':
            case 'month_format':
            case 'day_format':
            case 'day_value_format':
            case 'field_array':
            case 'day_size':
            case 'month_size':
            case 'year_size':
            case 'all_extra':
            case 'day_extra':
            case 'month_extra':
            case 'year_extra':
            case 'field_order':
            case 'field_separator':
            case 'month_value_format':
            case 'month_value_numeric_format':
            case 'month_empty':
            case 'day_empty':
            case 'year_empty':
                $$_key = (string)$_value;
                break;

            case 'all_empty':
                $$_key = (string)$_value;
                $day_empty = $month_empty = $year_empty = $all_empty;
                break;

            case 'display_days':
            case 'display_months':
            case 'display_years':
            case 'year_as_text':
            case 'display_ymd':
            case 'reverse_years':
                $$_key = (bool)$_value;
                break;
			case 'imperial':
				$imperial = (bool)$_value;
				break;
			case 'insert_default':
				$insert_default = $_value;
				break;
            default:
                if(!is_array($_value)) {
                    $extra_attrs .= ' '.$_key.'="'.smarty_function_escape_special_chars($_value).'"';
                } else {
                    $smarty->trigger_error("html_select_date_j: extra attribute '$_key' cannot be an array", E_USER_NOTICE);
                }
                break;
        }
    }

	if(preg_match('!^-\d+$!',$time)) {
        // negative timestamp, use date()
        $time = date('Y-m-d',$time);
    }
    // If $time is not in format yyyy-mm-dd
    if (!preg_match('/^\d{0,4}-\d{0,2}-\d{0,2}$/', $time)) {
        // use smarty_make_timestamp to get an unix timestamp and
        // strftime to make yyyy-mm-dd
        $time = strftime('%Y-%m-%d', smarty_make_timestamp($time));
    }
    // Now split this in pieces, which later can be used to set the select
    $time = explode("-", $time);
    
    // make syntax "+N" or "-N" work with start_year and end_year
    if (preg_match('!^(\+|\-)\s*(\d+)$!', $end_year, $match)) {
        if ($match[1] == '+') {
            $end_year = strftime('%Y') + $match[2];
        } else {
            $end_year = strftime('%Y') - $match[2];
        }
    }
    if (preg_match('!^(\+|\-)\s*(\d+)$!', $start_year, $match)) {
        if ($match[1] == '+') {
            $start_year = strftime('%Y') + $match[2];
        } else {
            $start_year = strftime('%Y') - $match[2];
        }
    }
    if (strlen($time[0]) > 0) { 
        if ($start_year > $time[0] && !isset($params['start_year'])) {
            // force start year to include given date if not explicitly set
            $start_year = $time[0];
        }
        if($end_year < $time[0] && !isset($params['end_year'])) {
            // force end year to include given date if not explicitly set
            $end_year = $time[0];
        }
    }

    $field_order = strtoupper($field_order);

    $html_result = $month_result = $day_result = $year_result = "";

    if ($display_months) {
        $month_names = array();
        $month_values = array();
        if(isset($month_empty)) {
            $month_names[''] = $month_empty;
            $month_values[''] = '';
        }
        for ($i = 1; $i <= 12; $i++) {
            $month_names[$i] = strftime($month_format, mktime(0, 0, 0, $i, 1, 2000));
            $month_values[$i] = strftime($month_value_format, mktime(0, 0, 0, $i, 1, 2000));
            if(preg_match("/[0-9]+/", $month_names[$i])) {
            	$month_names[$i] = sprintf($month_numeric_format, $month_names[$i]);
            }
            if(preg_match("/[0-9]+/", $month_values[$i])) {
            	$month_values[$i] = sprintf($month_value_numeric_format, $month_values[$i]);
            }
        }

        $month_result .= '<select name=';
        if (null !== $field_array){
            $month_result .= '"' . $field_array . '[' . $prefix . 'month]"';
        } else {
            $month_result .= '"' . $prefix . 'month"';
        }
        if (null !== $month_size){
            $month_result .= ' size="' . $month_size . '"';
        }
        if (null !== $month_extra){
            $month_result .= ' ' . $month_extra;
        }
        if (null !== $all_extra){
            $month_result .= ' ' . $all_extra;
        }
        if (is_null($field_array) && $display_ymd){
    		$month_result .= 'onchange="setYmdValue(\''.$prefix.'\')"';
        }
        $month_result .= $extra_attrs . '>'."\n";

		if($imperial){
			array_unshift($month_names, '--');
			array_unshift($month_values, '00');
		}

        $month_result .= smarty_function_html_options(array('output'     => $month_names,
                                                            'values'     => $month_values,
                                                            'selected'   => (int)$time[1] ? strftime($month_value_format, mktime(0, 0, 0, (int)$time[1], 1, 2000)) : '',
                                                            'print_result' => false),
                                                      $smarty);
        $month_result .= '</select>月';
    }

    if ($display_days) {
        $days = array();
        if (isset($day_empty)) {
            $days[''] = $day_empty;
            $day_values[''] = '';
        }
        for ($i = 1; $i <= 31; $i++) {
            $days[] = sprintf($day_format, $i);
            $day_values[] = sprintf($day_value_format, $i);
        }

        $day_result .= '<select name=';
        if (null !== $field_array){
            $day_result .= '"' . $field_array . '[' . $prefix . 'day]"';
        } else {
            $day_result .= '"' . $prefix . 'day"';
        }
        if (null !== $day_size){
            $day_result .= ' size="' . $day_size . '"';
        }
        if (null !== $all_extra){
            $day_result .= ' ' . $all_extra;
        }
        if (null !== $day_extra){
            $day_result .= ' ' . $day_extra;
        }
        if (is_null($field_array) && $display_ymd){
    		$day_result .= 'onchange="setYmdValue(\''.$prefix.'\')"';
        }
        $day_result .= $extra_attrs . '>'."\n";
        
       	if($imperial){
			array_unshift($days, '--');
			array_unshift($day_values, '00');
		} 
        
        $day_result .= smarty_function_html_options(array('output'     => $days,
                                                          'values'     => $day_values,
                                                          'selected'   => $time[2],
                                                          'print_result' => false),
                                                    $smarty);
        $day_result .= '</select>日';
    }

    if ($display_years) {
        if (null !== $field_array){
            $year_name = $field_array . '[' . $prefix . 'year]';
        } else {
            $year_name = $prefix . 'year';
        }
        if ($year_as_text) {
            $year_result .= '<input type="text" name="' . $year_name . '" value="' . $time[0] . '" size="4" maxlength="4"';
            if (null !== $all_extra){
                $year_result .= ' ' . $all_extra;
            }
            if (null !== $year_extra){
                $year_result .= ' ' . $year_extra;
            }
            $year_result .= ' />';
        } else {
            $years = range((int)$start_year, (int)$end_year);
            if ($reverse_years) {
                rsort($years, SORT_NUMERIC);
            } else {
                sort($years, SORT_NUMERIC);
            }
            $yearvals = $years;
            if(isset($year_empty)) {
                array_unshift($years, $year_empty);
                array_unshift($yearvals, '');
            }
            $year_result .= '<select name="' . $year_name . '"';
            if (null !== $year_size){
                $year_result .= ' size="' . $year_size . '"';
            }
            if (null !== $all_extra){
                $year_result .= ' ' . $all_extra;
            }
            if (null !== $year_extra){
                $year_result .= ' ' . $year_extra;
            }
	        if (is_null($field_array) && $display_ymd){
	    		$year_result .= 'onchange="setYmdValue(\''.$prefix.'\')"';
	        }
            $year_result .= $extra_attrs . '>'."\n";

			if($imperial){
				if(empty($insert_default)) {
					array_unshift($years, '----');
					array_unshift($yearvals, '0000');
				}
				
				$insert_default_target = 0;
				for($i = 0; $i < count($years); $i++) {
					if(1868 <= $years[$i] && $years[$i] <= 1911){
						$years[$i] .= "(明治".($years[$i] - 1867).")";
					}
					elseif(1912 <= $years[$i] && $years[$i] <= 1925){
						$years[$i] .= "(大正".($years[$i] - 1911).")";
					}
					elseif(1926 <= $years[$i] && $years[$i] <= 1988){
						$years[$i] .= "(昭和".($years[$i] - 1925).")";
					}
					elseif(1989 <= $years[$i]){
						$years[$i] .= "(平成".($years[$i] - 1988).")";
					}
					else
					{
						$years[$i] .= "(------)";
					}
					if(!empty($insert_default)) {
						if(preg_match("/^${insert_default}/", $years[$i])){
							$insert_default_target = $i;
						}
					}
					
				}
				if(!empty($insert_default_target)) {
					array_splice($years, $insert_default_target, 0, '----(------)');
					array_splice($yearvals, $insert_default_target, 0, '0000');
				}
				if(empty($time[0])) {
					$time[0] = '0000';
				}
					
			}
            
            $year_result .= smarty_function_html_options(array('output' => $years,
                                                               'values' => $yearvals,
                                                               'selected'   => $time[0],
                                                               'print_result' => false),
                                                         $smarty);
            $year_result .= '</select>年';
        }
    }
    
    // Loop thru the field_order field
    for ($i = 0; $i <= 2; $i++){
        $c = substr($field_order, $i, 1);
        switch ($c){
            case 'D':
                $html_result .= $day_result;
                break;

            case 'M':
                $html_result .= $month_result;
                break;

            case 'Y':
                $html_result .= $year_result;
                break;
        }
        // Add the field seperator
        if($i != 2) {
            $html_result .= $field_separator;
        }
    }
    
    if($display_ymd){
        if (!is_null($field_array)){
            $ymd_name = $field_array . '[' . $prefix . 'ymd]';
        } else {
            $ymd_name = $prefix;
        }
    	$ymd_result .= '<input type="hidden" name="'.$ymd_name.'" value="'.$time[0].$time[1].$time[2].'" ';

        if (is_null($field_array)){
    		$ymd_result .= 'onblur="setSelectValue(\''.$prefix.'\',this.value)"';
        }
    	$ymd_result .='size="8" maxlength="8" />'. "\n";
    	
        if (is_null($field_array)){
	    	$javascript .= '<script language="javascript">'. "\n";
	    	$javascript .= '<!--'. "\n";
			$javascript .= 'setYmdValue(\''.$prefix.'\');'. "\n";
	    	
	    	$javascript .= 'function setSelectValue(prifix,ymd){'. "\n";
			$javascript .= ' if(ymd.length>=8){'. "\n";
			$javascript .= '  var year = ymd.substr(0,4);'. "\n";
			$javascript .= '  var month = ymd.substr(4,2);'. "\n";
			$javascript .= '  var day = ymd.substr(6,2);'. "\n";
			$javascript .= '  var isYearSelect = false;'. "\n";
			$javascript .= '  var isMonthSelect = false;'. "\n";
			$javascript .= '  var isDaySelect = false;'. "\n";
			$javascript .= '  var target_y = document.getElementsByName(prifix+\'year\')[0].options;'. "\n";
			$javascript .= '  for(var i = 0;  i <  target_y.length; i++) {'. "\n";
			$javascript .= '    if( target_y[i].value == year) {'. "\n";
			$javascript .= '      target_y[i].selected = true;'. "\n";
			$javascript .= '      isYearSelect = true;'. "\n";
			$javascript .= '      break;'. "\n";
			$javascript .= '    }'. "\n";
			$javascript .= '  }'. "\n";
			$javascript .= '  var target_m = document.getElementsByName(prifix+\'month\')[0].options;'. "\n";
			$javascript .= '  for(var j = 0;  j <  target_m.length; j++) {'. "\n";
			$javascript .= '    var j_month = target_m[j].value;'. "\n";
			$javascript .= '    if(j_month.length == 1){'. "\n";
			$javascript .= '      j_month = \'0\' + j_month;'. "\n";
			$javascript .= '    }'. "\n";
			$javascript .= '    if( j_month == month) {'. "\n";
			$javascript .= '      target_m[j].selected = true;'. "\n";
			$javascript .= '      isMonthSelect = true;'. "\n";
			$javascript .= '      break;'. "\n";
			$javascript .= '    }'. "\n";
			$javascript .= '  }'. "\n";
			$javascript .= '  var target_d = document.getElementsByName(prifix+\'day\')[0].options;'. "\n";
			$javascript .= '  for(var k = 0;  k <  target_d.length; k++) {'. "\n";
			$javascript .= '    var k_day = target_d[k].value;'. "\n";
			$javascript .= '    if(k_day.length == 1){'. "\n";
			$javascript .= '      k_day = \'0\' + k_day;'. "\n";
			$javascript .= '    }'. "\n";
			$javascript .= '    if( k_day == day) {'. "\n";
			$javascript .= '      target_d[k].selected = true;'. "\n";
			$javascript .= '      isDaySelect = true;'. "\n";
			$javascript .= '      break;'. "\n";
			$javascript .= '    }'. "\n";
			$javascript .= '  }'. "\n";
			$javascript .= '  if(ymd != \'00000000\' && (!isYearSelect || !isMonthSelect || !isDaySelect)){'. "\n";
			$javascript .= '    ymd = \'00000000\';'. "\n";
	    	$javascript .= '    setSelectValue(prifix,ymd);'. "\n";
	    	$javascript .= '    return;'. "\n";
			$javascript .= '  }'. "\n"; 
			$javascript .= ' }'. "\n"; 
	    	$javascript .= '}'. "\n";
			$javascript .= 'function setYmdValue(prifix){'. "\n";
			$javascript .= ' var year = document.getElementsByName(prifix+\'year\')[0].options[document.getElementsByName(prifix+\'year\')[0].selectedIndex].value;'. "\n";
			$javascript .= ' var month = document.getElementsByName(prifix+\'month\')[0].options[document.getElementsByName(prifix+\'month\')[0].selectedIndex].value;'. "\n";
			$javascript .= ' if(month.length == 1){'. "\n";
			$javascript .= '  month = \'0\' + month;'. "\n";
			$javascript .= ' }'. "\n";
			$javascript .= ' var day = document.getElementsByName(prifix+\'day\')[0].options[document.getElementsByName(prifix+\'day\')[0].selectedIndex].value;'. "\n";
			$javascript .= ' if(day.length == 1){'. "\n";
			$javascript .= '  day = \'0\' + day;'. "\n";
			$javascript .= ' }'. "\n";
			$javascript .= ' document.getElementsByName(prifix)[0].value = year +"-"+ month +"-"+ day + \'\';'. "\n";
			$javascript .= '}'. "\n";
	    	
	    	$javascript .= '//-->'. "\n";
	    	$javascript .= '</script>'. "\n";
        }
		$html_result .= $ymd_result;
		$html_result .= $javascript;
		
    }

	
    return $html_result;
}

/* vim: set expandtab: */

?>