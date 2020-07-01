<?php


class Authentication extends Base{

	public function items_get($id){

		$password = $this->input->post('password');
		$items = $this->base_model->get_items($id);

	}

	public function getDetails(){


	}


}
