<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 18.49
 */
class UserModel extends CI_Model{
    public function cek_user($data){
        return $this->db->get_where('user', $data);
    }
    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

	}
}
?>