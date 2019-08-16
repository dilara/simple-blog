<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public $status;

  function __construct(){
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('users_model');
    $this->status = $this->config->item('status');
  }

  public function index()
  {
    if ( empty($this->session->userdata['email']) )
    {
      redirect('/home/login/');
    }

    $data = $this->session->userdata;
    $this->layout->view('layouts/default', 'home/index');
  }

  public function register()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE) {
      $this->layout->view('layouts/guest', 'home/register');
    }
    else
    {
      if ( $this->users_model->is_duplicate($this->input->post('email')) )
      {
        $this->session->set_flashdata('flash_message', 'User already exists');
        redirect('/home/login');
      }
      else
      {
        # Confused
        $this->load->library('password');
        $post = $this->input->post(NULL, TRUE);
        $clean = $this->security->xss_clean($post);
        $hashed = $this->password->create_hash($clean['password']);
        $clean['password'] = $hashed;
        unset($clean['passconf']);
        $user = $this->users_model->create_user($clean);

        if ( !$user )
        {
          $this->session->set_flashdata('flash_message', 'There was a problem creating your record');
          redirect('/home/register');
        }

        unset($clean->password);

        foreach($clean as $key=>$val){
          $this->session->set_userdata($key, $val);
        }

        redirect('/home/index');
      };
    }
  }

  public function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ( $this->form_validation->run() == FALSE )
    {
      $this->layout->view('layouts/guest', 'home/login');
    }
    else
    {
      $post = $this->input->post();
      $clean = $this->security->xss_clean($post);
      $user = $this->users_model->confirm($clean);

      if ( !$user )
      {
        $this->session->set_flashdata('flash_message', 'The login was unsucessful');
        redirect('/home/login');
      }

      foreach ( $user as $key=>$val )
      {
        $this->session->set_userdata($key, $val);
      }

      redirect('/home');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/home/login/');
  }
}