<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AirFighter extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AirFighter_model');       
    }

	public function user_details()
	{
        $data = $this->AirFighter_model->get_users();
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
	}
}
