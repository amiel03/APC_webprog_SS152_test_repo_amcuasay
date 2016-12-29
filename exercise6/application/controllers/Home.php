<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_CONTROLLER{
	function index( $pages = 'homepage')
	{
		if ( ! file_exists('application/views/users/'.$pages.'.php')){

			show_404();
		}

		$this->load->view('users/homepage');
        $this->load->view('users/create');
        $this->load->view('users/edit');
	}

	public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    

    public function view($slug = NULL)
    {
        $data['item'] = $this->news_model->get_news($slug);

        if (empty($data['item']))
        {
            show_404();
        }

        $this->load->view('users/homepage', $data);
        $this->load->view('users/view', $data);

    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('users/homepage', $data);
            $this->load->view('users/create');
            

        }
        else
        {
            $this->news_model->set_news();

            $this->load->view('users/success');

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


        $data['item'] = $this->news_model->get_news_by_id($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('users/homepage', $data);
            $this->load->view('users/edit', $data);


        }
        else
        {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'users/homepage.php');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $news_item = $this->news_model->get_news_by_id($id);

        $this->news_model->delete_news($id);
        redirect( base_url() . 'users/homepage.php');
    }
}