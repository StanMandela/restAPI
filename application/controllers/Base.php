<?php

require APPPATH . 'libraries/REST_Controller.php';

class Base extends REST_Controller {

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	 */
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

public function items_get($id){

	$password = $this->input->post('password');
	$items = $this->base_model->get_items($id);

}
 public function getDetails(){

 }
}
