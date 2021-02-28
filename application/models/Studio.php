<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {
	
	public function add_feed($name,$link,$msg,$img)
	{
		$data=array('name'=>$name,'link'=>$link,'msg'=>$msg,'img'=>$img);
        $this->db->insert('feed',$data);
	}
	
	 public function select_feed()
    {
        $query=$this->db->query("select * from feed");
	return $query->result();
    }
    public function add_contact($name,$mail,$serve,$pack,$msg)
	{
		$data=array('name'=>$name,'mail'=>$mail,'serve'=>$serve,'pack'=>$pack,'msg'=>$msg);
        $this->db->insert('contact',$data);
	}
	
    
}
