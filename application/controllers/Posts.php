<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('posts_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['posts'] = $this->posts_model->get_posts();

    $this->layout->view('layouts/default', 'posts/index', $data);
  }

  public function view($id = NULL)
  {
    $data['post'] = $this->posts_model->get_post($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->layout->view('layouts/default', 'posts/view', $data);
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->layout->view('layouts/default', 'posts/create');
    }
    else
    {
      $this->posts_model->set_posts();
      $this->load->view('posts/success');
    }
  }
}