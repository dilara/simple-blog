<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index($page = 'index')
    {
        if ( !file_exists(APPPATH.'views/home/'.$page.'.php')) { show_404(); }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('home/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}