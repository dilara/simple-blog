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
    $data['posts'] = $this->posts_model->all();

    $this->layout->view('layouts/default', 'posts/index', $data);
  }

  public function show($id = NULL)
  {
    $data['post'] = $this->posts_model->find($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->layout->view('layouts/default', 'posts/show', $data);
  }

  public function new()
  {
    $this->load->helper('form');
    $this->layout->view('layouts/default', 'posts/new');
  }

  public function create()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->layout->view('layouts/default', 'posts/new');
    }
    else
    {
      $this->posts_model->insert();
      redirect('/posts/index');
    }
  }

  public function edit($id = NULL)
  {
    $data['post'] = $this->posts_model->find($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->load->helper('form');
    $this->layout->view('layouts/default', 'posts/edit', $data);
  }

  public function update($id = NULL)
  {
    $data['post'] = $this->posts_model->find($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->layout->view('layouts/default', 'posts/edit', $data);
    }
    else
    {
      $this->posts_model->update($data['post']['id']);
      redirect('posts/'.$data['post']['id']);
    }
  }

  public function delete($id = NULL)
  {
    $data['post'] = $this->posts_model->find($id);
    if ( !$data['post'] ) { redirect('/posts'); }

    $this->posts_model->delete($data['post']['id']);
    redirect('posts');
  }
}