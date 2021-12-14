<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// This will insert the inputs to the database.
class contact_model extends CI_model{
	public function __construct(){
		parent::__construct();
		//loads database
		$this->load->database();
	}

	public function submitMessage(){
		//pass data inputs to the variables in the database
		$data = array(
			'lab4msg_name' => $this->input->post('name'),
			'lab4msg_email' => $this->input->post('email'),
			'lab4msg_phone' => $this->input->post('phone'),
			'lab4msg_title' => $this->input->post('title'),
			'lab4msg_content' => $this->input->post('content'),
			'lab4msg_dateReceived' => date('Y-m-d H:i:s')
		);
        
        //inserts the data passed to the database
		return $this->db->insert('lab4_messages', $data);
	}
}
?>