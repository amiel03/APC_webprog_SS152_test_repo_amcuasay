<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_CONTROLLER{
	public function index()
	{
		$data['title'] = 'WELCOME TO MYPAGE';
		$this->load->view('templates/navigation');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage');
		$this->load->view('templates/footer');
	}
}