<?php

class Crud_model extends CI_Model{



	public function getAllProducts(){


		$query = $this->db->get('records');

		if ($query) {
			
			return $query->result();
		}
	}

	public function insertProduct($data){
		$query = $this->db->insert('records', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function getSingleProduct($id){

		$this->db->where('id',$id);
		$query = $this->db->get('records');

		if ($query) {
			return $query->row();
		}
	}

	public function updateProduct($data, $id){

		$this->db->where('id',$id);
		$query = $this->db->update('records', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}

	}
	public function deleteItem($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('records');

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}

?>