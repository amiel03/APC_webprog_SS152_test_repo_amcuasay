<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_user($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_user_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function set_user($id = 0)
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('firstname'), 'dash', TRUE);

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'slug' => $slug,
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'comment' => $this->input->post('comment')
        );

        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}