<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data = array();
		$data['variable1']= "a value from controller";
		$data['homepage_content']=$this->load->view('main_site/main_content_view',$data,true);
    // asdssdsdsdsdsdsd
		$this->load->view('home_view',$data);
	}


	public function page1()
	{
		$data = array();
		$data['variable2']= $this->welcome_model->method1();
		$data['home_page_contents']=$this->load->view('main_site/page_content',$data,true);

		$this->load->view('master',$data);
	}







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
