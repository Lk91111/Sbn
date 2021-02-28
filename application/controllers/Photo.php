 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/index');
	}
         
        public function about_us()
	{
		$this->load->view('user/about');
	}
        public function services()
	{
		$this->load->view('user/services');
	}
         public function feedback()
	{
		$this->load->view('user/feedback');
	}
           public function gallery()
	{
		$this->load->view('user/gallery');
	}
          public function masonry()
	{
		$this->load->view('user/masonry');
	}
         public function blog()
	{
		$this->load->view('user/blog');
	}
        public function contact()
	{
		$this->load->view('user/contact');
	}
       
       
}
