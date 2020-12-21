<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Simplelogin Class
*
* Makes authentication simple
*
* Simplelogin is released to the public domain
* (use it however you want to)
*
* Simplelogin expects this database setup
* (if you are not using this setup you may
* need to do some tweaking)
*/

class client_login {

	var $CI;
	var $user_table = 't_shop_base';

	function client_login()
	{
		// get_instance does not work well in PHP 4
		// you end up with two instances
		// of the CI object and missing data
		// when you call get_instance in the constructor
		//$this->CI =& get_instance();
	}

	/**
	 * Create a user account
	 *
	 * @access  public
	 * @param   string
	 * @param   string
	 * @param   bool
	 * @return  bool
	 */
	function create($user = '', $pwd = '', $auto_login = true) 
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();

		//Make sure account info was sent
		if ($user == '' OR $pwd == '')
		{
			return false;
		}
		
		//Check against user table
		$this->CI->db->where('sd_account', $user);
		$query = $this->CI->db->getwhere($this->user_table);
		
		if ($query->num_rows()> 0)
		{
			//id already exists
			return false;
			
		}
		else
		{
			//Encrypt pwd
#			$pwd = md5($pwd);
			
			//Insert account into the database
			$data = array(
						'sd_account' => $user,
						'sd_pwd' => $pwd
					);
			$this->CI->db->set($data);
			if(!$this->CI->db->insert($this->user_table)) {
				//There was a problem!
				return false;				  
			}
			$user_id = $this->CI->db->insert_id();
			
			//Automatically login to created account
			if ($auto_login)
			{	  
				//Destroy old session
				$this->CI->session->sess_destroy();
				
				//Create a fresh, brand new session
				$this->CI->session->sess_create();
				
				//Set session data
				$user_id;
				
				$this->CI->session->set_userdata(array('sd_account' => $user_id,'sd_pwd' => $pwd));
				
				//Set logged_in to true
				$this->CI->session->set_userdata(array('logged_in' => true));		 
			
			}
			
			//Login was successful	  
			return true;
		}

	}

	/**
	 * Delete user
	 *
	 * @access  public
	 * @param integer
	 * @return  bool
	 */
	function delete($user_id)
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();
		
		if(!is_numeric($user_id))
		{
			//There was a problem
			return false;		 
		}

		if($this->CI->db->delete($this->user_table, array('sd_account' => $user_id)))
		{
			//Database call was successful, user is deleted
			return true;
		}
		else
		{
			//There was a problem
			return false;
		}
	}

	/**
	 * Login and sets session variables
	 *
	 * @access  public
	 * @param   string
	 * @param   string
	 * @return  bool
	 */
	function login($user = '', $pwd = '',$mode = '')
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();

		//Make sure login info was sent
		if ($user == '' OR $pwd == '')
		{
			return false;
		}
		
		//Check if already logged in
#		if ($this->CI->session->userdata('sd_account') == $user)
#		{
#			//User is already logged in.
#			return false;
#		}
		
		//Check against user table
		$this->CI->db->where('sd_account', $user);
		if($mode == "admin_login"){
			$query = $this->CI->db->getwhere($this->user_table);
		}else{
			$query = $this->CI->db->getwhere($this->user_table,array("sd_acc_state" => "t"));
		}
	
		if ($query->num_rows()> 0)
		{
			
			$row = $query->row_array();
			//Check against pwd
#			if(md5($pwd) != $row['sd_pwd']){
			if($pwd != $row['sd_pwd']){
			
			
			return false;
			}
			
			//login db update
			$updateset = array (
					"sd_login_count" => ($row['sd_login_count'] = $row['sd_login_count'] + 1),
					"sd_last_login" => 'now()'
					);
			$this->CI->db->where('sd_account', $user);
			$this->CI->db->update($this->user_table, $updateset);
			
			
			// 複数行登録防止処理追加 2009/03/11 mori
			// トランザクションスタート
			$this->CI->db->trans_start();
			
			// 月ごとのログイン回数
# 			$this->CI->db->select('*');
# 			$this->CI->db->from('t_manager_usedata');
# 			$this->CI->db->where("ud_year = '".date("Y")."' and ud_month = '".date("m")."' and sid = '".$row['sid']."'");
# 			
# 			$query = $this->CI->db->get();
			
			
			$query = $this->CI->db->query("select * from t_manager_usedata where sid = '".$row['sid']."' and ud_year = '".date("Y")."' and ud_month = '".date("m")."' order by ud_no asc for update");
			
			$rows = $query->num_rows;
			
			if($rows > 0){
				$result = $query->result_array();
				
				if(count($result) == 1){
					$update_array = array(
										'client_login_count' => ($result[0]['client_login_count'] + 1)
									);
					
					// 月ごとのログイン回数アップデート
					$this->CI->db->where("sid = '".$row['sid']."' and ud_year = '".date("Y")."' and ud_month = '".date("m")."'");
					$this->CI->db->update('t_manager_usedata',$update_array);
					
				}
			}else{
				// 月ごとのログイン回数インサート
				$ins_array = array(
								'sid' => $row['sid'],
								'ud_year' => date("Y"),
								'ud_month' => date("m"),
								'client_login_count' => '1'
							);
				
				$this->CI->db->insert('t_manager_usedata',$ins_array);
				
			}
			
			// トランザクションエンド
			$this->CI->db->trans_complete();
			
			
			//Destroy old session
#			$this->CI->session->sess_destroy();
			unset($_SESSION['login_dat']);
			
			//Create a fresh, brand new session
#			$this->CI->session->sess_create();
			
			//Remove the pwd field
			unset($row['sd_pwd']);
			
			//Set session data
#			$this->CI->session->set_userdata($row);
			$_SESSION['login_dat'] = $row;
			
			//Set logged_in to true
#			$this->CI->session->set_userdata(array('logged_in' => true));
			$_SESSION['login_dat']['logged_in'] = true;
			
			//Login was successful	  
			return true;
		}
		else
		{
			//No database result found
			return false;
		}   

	}

	/**
	 * Logout user
	 *
	 * @access  public
	 * @return  void
	 */
	function logout()
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();

		//Destroy session
		$this->CI->session->sess_destroy();
	}
}
?>
