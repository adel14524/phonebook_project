<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function __construct(){
        //call codeigniter's default constructor
        parent::__construct();

        //load model
        $this->load->model('Contact');
    }

    //Display Phone Book List
	public function displaydata(){

        $result['data'] = $this->Contact->display_contact();
		$this->load->view('ListContact', $result);
	}

    //Insert contact into db
    public function savecontact(){

        //load contact form
		$this->load->view('CreateContact');

        //check submit button
        if($this->input->post('save')){
            $data['name'] = $this->input->post('name');
            $data['phone_no'] = $this->input->post('phone_no');
            $response = $this->Contact->saverecords($data);

            if ($response == true) {
                
                echo '<script type="text/javascript">
                        alert("Congratulations ! Contact has successfully been added.");
                        window.location.href = "displaydata";
                    </script>';
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oppss !</strong> Error in adding new contact.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
        }
	}

    //update process
    public function updatedata(){

        //get passed id from url
        $id = $this->input->get('id');
        $result['data'] = $this->Contact->display_contact_id($id);

        //load contact form with details
        $this->load->view('UpdateContact', $result);

        //check update button
        if ($this->input->post('update')) {

            $name = $this->input->post('name');
            $phone_num = $this->input->post('phone_no');
            $response = $this->Contact->update_contact($name, $phone_num, $id);

            print_r($response);

            if ($response == true) {
                echo '<script type="text/javascript">
                    alert("Congratulations ! Contact has successfully updated.");
                    window.location.href = "displaydata";
                </script>';
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oppss !</strong> Error while updating contact.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
            
        }
        
    }

    //delete process
    public function deletedata(){

        //get passed id from url
        $id = $this->input->get('id');
        $response = $this->Contact->delete_contact($id);

        if ($response == true) {
            echo '<script type="text/javascript">
                    alert("Yup ! Contact has successfully deleted.");
                    window.location.href = "displaydata";
                </script>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oppss !</strong> Error while deleting contact.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        }
    }
}