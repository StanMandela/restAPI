<?php
/**
 * Created by PhpStorm
 * User: Stan Mandela
 * Date: 8/19 2020
 * Time: 12:25 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

 public function get_items ($id=0){
	 $this->db->select('*');
	 $this->db->from('items');
	 $this->db->where('id', $id);
	 $items = $this->db->get()->row();
	 return $items;
 }


}
