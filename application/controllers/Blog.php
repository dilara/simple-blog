<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('posts_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['posts'] = $this->posts_model->all();

    $this->layout->view('layouts/blog', 'blog/index', $data);
  }

  public function post($id = NULL)
  {
    $data['post'] = $this->posts_model->find($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->layout->view('layouts/blog', 'blog/post', $data);
  }
}