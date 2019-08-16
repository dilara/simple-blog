<?php
class Users_model extends CI_Model {
  public $status;

  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->status = $this->config->item('status');
  }

  public function get_user($id = NULL)
  {
    if ( !$id ) {
      error_log('Missing parameter: id');
      return false;
    }

    $query = $this->db->get_where('users', array('id' => $id));
    return $query->row_array();
  }

  public function create_user($post)
  {
    $data = array(
      'name'      => $post['name'],
      'email'     => $post['email'],
      'status'    => $this->status[0],
      'password'  => $post['password']
      );

    if ( $this->db->insert('users', $data) )
    {
      return $this->db->insert_id();
    }
    return false;
  }

  public function is_duplicate($email)
  {
    $this->db->get_where('users', array('email' => $email), 1);
    return $this->db->affected_rows() > 0 ? TRUE : FALSE;
  }

  public function confirm($post)
  {
    $this->load->library('password');
    $this->db->select('*');
    $this->db->where('email', $post['email']);
    $query = $this->db->get('users');
    $user = $query->row();

    if ( ! $this->password->validate_password($post['password'], $user->password) )
    {
      error_log('Unsuccessful login attempt, Email: ('.$post['email'].')');
      return false;
    }

    unset($user->password);
    return $user;
  }
}