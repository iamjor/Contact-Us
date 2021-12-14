<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Contact controller class that will validate the form inputs
class Contact extends CI_Controller{

	public function index(){
		$data["title"] = 'Contact Us';
		//load contact view page with the string passed as title of the page
		$this->load->view('contact', $data);
	}

	public function submit(){
        
        //validate inputs
		$this->form_validation->set_rules('name', 'Sender Name', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('phone', 'Sender Name', 'required');
		$this->form_validation->set_rules('title', 'Sender Name', 'required');
		$this->form_validation->set_rules('content', 'Sender Name', 'required|min_length[8]');

		if($this->form_validation->run()===TRUE){
			
            //load contact_model
			$this->load->model('contact_model');
			//pass submitMessage method of contact-model to isInserted variable
			$isInserted = $this->contact_model->submitMessage();
            
            //if the data inputs are inserted to database, "Message Sent" will be displayed, if not, display "Error"
			if($isInserted){
				echo "Message Sent";
			}else{
				echo "Error";
			}
		}else{
			//if form validation wasn't successfully run, go back to contact us page
			$this->index();
		}
	}
}
?>