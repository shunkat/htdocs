<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Pagination
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 */
class CI_Pagination {

	var $base_url			= ''; // The page we are linking to
	var $total_rows  		= ''; // Total number of items (database results)
	var $per_page	 		= 10; // Max number of items you want shown per page
	var $num_links			=  2; // Number of "digit" links to show before/after the currently viewed page
	var $cur_page	 		=  0; // The current page being viewed
#	var $first_link   		= '&lsaquo; First';
	var $next_link			= '&gt;';
	var $prev_link			= '&lt;';
#	var $last_link			= 'Last &rsaquo;';
	var $uri_segment		= 3;
	var $full_tag_open		= '';
	var $full_tag_close		= '';
	var $first_tag_open		= '';
	var $first_tag_close	= '&nbsp;';
	var $last_tag_open		= '&nbsp;';
	var $last_tag_close		= '';
	var $cur_tag_open		= '&nbsp;<b>';
	var $cur_tag_close		= '</b>';
	var $next_tag_open		= '&nbsp;';
	var $next_tag_close		= '&nbsp;';
	var $prev_tag_open		= '&nbsp;';
	var $prev_tag_close		= '';
	var $num_tag_open		= '&nbsp;';
	var $num_tag_close		= '';

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
	function CI_Pagination($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);		
		}
		
		log_message('debug', "Pagination Class Initialized");
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}		
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Generate the pagination links
	 *
	 * @access	public
	 * @return	string
	 */	
	function create_links($now_page = "")
	{
		// If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
		   return '';
		}

		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);

		// Is there only one page? Hm... nothing more to do here then.
		if ($num_pages == 1)
		{
			return '';
		}

		// Determine the current page number.		
		$CI =& get_instance();	
		if ($CI->uri->segment($this->uri_segment) != 0)
		{
			$this->cur_page = $CI->uri->segment($this->uri_segment);
			
			// Prep the current page - no funny business!
			$this->cur_page = (int) $this->cur_page;
		}

		$this->num_links = (int)$this->num_links;
		
		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}
				
		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = 0;
		}
		
		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->cur_page > $this->total_rows)
		{
			$this->cur_page = ($num_pages - 1) * $this->per_page;
		}
		
		$uri_page_number = $this->cur_page;
		$this->cur_page = floor(($this->cur_page/$this->per_page) + 1);

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		// Add a trailing slash to the base URL if needed
		$this->base_url = rtrim($this->base_url, '/') .'/';

  		// And here we go...
		$output = '';

		// Render the "First" link
#		if  ($this->cur_page > $this->num_links)
#		{
#			$output .= $this->first_tag_open.'<a href="'.$this->base_url.'">'.$this->first_link.'</a>'.$this->first_tag_close;
#		}

		// Render the "previous" link
		if  ($this->cur_page != 1)
		{
			$i = $uri_page_number - $this->per_page;
#			if ($i == 0) $i = '';
			if($now_page == "result"){
				$output .= $this->prev_tag_open.'<a href="'.$this->base_url."start_".$i.'/">'.$this->prev_link.'</a>'.$this->prev_tag_close;
			}else{
				$output .= $this->prev_tag_open.'<a href="'.$this->base_url."Pos_".$i.'/">'.$this->prev_link.'</a>'.$this->prev_tag_close;
			}
		}

		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++)
		{
			$i = ($loop * $this->per_page) - $this->per_page;
					
			if ($i >= 0)
			{
				if ($this->cur_page == $loop)
				{
					$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
				}
				else
				{
#					$n = ($i == 0) ? '' : $i;
					$n = $i;
#					$output .= $this->num_tag_open.'<a href="'.$this->base_url.$n.'">'.$loop.'</a>'.$this->num_tag_close;
					if($loop == $end){
						$this->num_tag_close = '';
					}
					if($now_page == "result"){
						$output .= $this->num_tag_open.'<a href="'.$this->base_url."start_".$n.'/">'.$loop.'</a>'.$this->num_tag_close;
					}else{
						$output .= $this->num_tag_open.'<a href="'.$this->base_url."Pos_".$n.'/">'.$loop.'</a>'.$this->num_tag_close;
					}
				}
			}
		}

		// Render the "next" link
		if ($this->cur_page < $num_pages)
		{
			if($now_page == "result"){
				$output .= $this->next_tag_open.'<a href="'.$this->base_url."start_".($this->cur_page * $this->per_page).'/">'.$this->next_link.'</a>'.$this->next_tag_close;
			}else{
				$output .= $this->next_tag_open.'<a href="'.$this->base_url."Pos_".($this->cur_page * $this->per_page).'/">'.$this->next_link.'</a>'.$this->next_tag_close;
			}
		}

		// Render the "Last" link
#		if (($this->cur_page + $this->num_links) < $num_pages)
#		{
#			$i = (($num_pages * $this->per_page) - $this->per_page);
#			$output .= $this->last_tag_open.'<a href="'.$this->base_url.$i.'">'.$this->last_link.'</a>'.$this->last_tag_close;
#		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// 2009/03/11 ページャー見た目修正
		$output = preg_replace("#([^:])/&nbsp;&nbsp;/+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;
		
		return $output;		
	}
	
	
#	function result(&$query,$limit = 10){
#		
#		$CI =& get_instance();	
#		$sp = split("/",$CI->uri->router->uri_string);
#		$sp_count = count($sp);
#		// 日本語ドメインの場合は /s/{alias}/ に相当するパラメータを仮想追加する
#		if(ereg("xn--.+", $CI->uri->segment(2))){
#			$sp_count += 2;
#		}
#		######
#		if(empty($this->base_url)){
#			$this->base_url = '/';
#			for($i=1;$i<count($sp)-1;$i++){
#				$this->base_url .= $sp[$i]."/";
#			}
#		}
#		######
#		
#		//検索結果数を取得
#		$data['rows'] = $query->num_rows();
#		
#		//ページャー生成イニシャライズ
#		$this->initialize(
#							array(
#									'total_rows'	 => $data['rows'],
#									'per_page'		 => $limit,
#									'cur_page'		 => 0,
#									'full_tag_open'	 => '<p>',
#									'full_tag_close' => '</p>',
#									'page_suffix'    => '.html',
#									'uri_segment'	 => $sp_count-1
#									)
#								);	
#		$this->create_links();
# 
#		//ページャーをオブジェクトとしてセット
#		$data['pager'] = $this;
#		//データの取得（LIMIT、OFFSET対応）
#		$data['info'] = $data['rows']."件中&nbsp;".$this->cur_rows_first."-".$this->cur_rows_last."件目";
# 
#		$query->_data_seek($this->cur_rows_first -1);
#		for($i=$this->cur_rows_first -1;$i<$this->cur_rows_last;$i++){
#			if(isset($query->result_object[$i])){
#				$data['data'][] = $query->result_object[$i];
#			}else{
#				$data['data'][] = $query->_fetch_object();
#			}
#		}
#		return $data;
#	}
	
}
// END Pagination Class
?>