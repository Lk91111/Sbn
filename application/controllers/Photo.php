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
		
            if($this->input->post('submit'))
            {
                $file_name=$_FILES['img']['name'];
                $temp_name=$_FILES['img']['tmp_name'];
                $target_path='C:/xampp/htdocs/Sbn/assets/images/feed/'.$file_name;
                $filetype=  strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
                
                        $name=  $this->input->post('name');
                        $link=  $this->input->post('link');
                        $msg=  $this->input->post('msg');
                        move_uploaded_file($temp_name, $target_path);
                        $this->Studio->add_feed($name,$link,$msg,$file_name);
                    redirect('feedback');
            }
             $result['values']=$this->Studio->select_feed();
                
		$this->load->view('user/feedback',$result);
               
		
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
            
         if($this->input->post('submit'))
         {
                              
                 $name=  $this->input->post('name');
                 $mail=  $this->input->post('mail');
                 $serve=  $this->input->post('serve');
                 $pack=  $this->input->post('pack');
                 $msg=  $this->input->post('msg');
                 
               
                 $this->Studio->add_contact($name,$mail,$serve,$pack,$msg);
         }     
                         
                                            
                
	
		$this->load->view('user/contact');
	
        }
       
}
