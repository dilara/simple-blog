<?php
class Posts_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function all()
  {
    $query = $this->db->get('posts');
    return $query->result_array();
  }

  public function find($id = NULL)
  {
    if ( !$id ) { show_error('missing parameter'); }

    $query = $this->db->get_where('posts', array('id' => $id));
    return $query->row_array();
  }

  public function update($id = NULL) {
    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    );

    $this->db->where('id', $id);
    $this->db->update('posts', $data);
  }

  public function insert()
  {
    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    );

    return $this->db->insert('posts', $data);
  }

  public function delete($id = NULL)
  {
    $this->db->where('id', $id);
    $this->db->delete('posts');
  }
}