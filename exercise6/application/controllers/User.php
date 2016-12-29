<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->user_model->get_user();
        $data['firstname'] = 'My table';

        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['user_item'] = $this->user_model->get_user($slug);

        if (empty($data['user_item']))
        {
            show_404();
        }

        $data['firstname'] = $data['user_item']['firstname'];

        $this->load->view('templates/header', $data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['firstname'] = 'Register here!';
        /*
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('text', 'Text', 'required');
            */
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('users/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->user_model->set_user();
            $this->load->view('templates/header', $data);
            $this->load->view('users/success');
            $this->load->view('templates/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['firstname'] = 'Edit a news item';
        $data['user_item'] = $this->user_model->get_user_by_id($id);

        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('users/edit', $data);
            $this->load->view('templates/footer');

        }
        else
        {
            $this->user_model->set_user($id);
            redirect( base_url() . 'index.php/user');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $user_item = $this->user_model->get_user_by_id($id);

        $this->user_model->delete_user($id);
        redirect( base_url() . 'index.php/user');
    }
}