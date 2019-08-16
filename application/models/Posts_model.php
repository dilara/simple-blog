<?php
class Posts_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function get_posts()
  {
    $query = $this->db->get('posts');
    return $query->result_array();
  }

  public function get_post($id = NULL)
  {
    if ( !$id ) { show_error('missing parameter'); }

    $query = $this->db->get_where('posts', array('id' => $id));
    return $query->row_array();
  }

  public function set_posts()
  {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    );

    return $this->db->insert('posts', $data);
  }
}