<?
	class arai extends Controller{
		function arai(){
			parent::Controller();
		}
		
		function index(){
#			$query = $this->db->query('select * from t_manager_topics');
#			print $query->num_rows();
#			$this -> db -> select('*');
#			$this -> db -> get('t_manager_topics');
#			
#			foreach($query->result() as $rows){
#				
#			}
			
			
			$data['page_title'] = "トピックス管理";
			$data['now_page'] = "topics";
			$data['document_root'] = $_SERVER['DOCUMENT_ROOT'];
			
			$this->smarty_parser->parse("ci:admin/arai.tpl", $data);
		}
		
		
		
	}
?>