<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data extends CI_Controller {

    public function index()
    {
        $data['content']    = 'master_data/data';
        $this->load->view('overview',$data);
    }
}