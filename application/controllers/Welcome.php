<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct() 
{
  parent::__construct();
  // Load form helper library
  $this->load->helper('form');
  // Load form validation library
  $this->load->library('form_validation');
  // Load session library
  $this->load->library('session');
  $this->load->model('Registermodel');
  $this->load->helper('date');
  date_default_timezone_set('Asia/Kolkata');
}
	public function index()
	{

		$this->load->view('register');
	}

  public function dashboard()
  {
    if (isset($this->session->userdata['logged_in'])) {
           $username = ($this->session->userdata['logged_in']['username']);
        } else{
      $this->load->view('dashboard');
    }
  }
	public function registerProcess()
    {
        if (isset($this->session->userdata['logged_in'])) {
           $username = ($this->session->userdata['logged_in']['username']);
        }
                
      $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == FALSE) {
        echo 2;
      }else{
        $regData = array(
        // 'reid' => $newId,
        'fname' => $this->input->post('fname'),
        'lname' => $this->input->post('lname'),  
        'mobile_no' => $this->input->post('mobile_no'), 
        'email' => $this->input->post('email'),
        'state' => $this->input->post('state'),
        'district' => $this->input->post('district'),
        'password' => $this->input->post('password'),
        'cfpassword' => $this->input->post('cfpassword'), 
        );
        $res = $this->Registermodel->newreg($regData);
        if ($res == TRUE) {
           // $sess_array = array(
           //  'username' => ''
           //  );
           //  $this->session->unset_userdata('logged_in', $sess_array);

        if (isset($this->session->userdata['logged_in'])) {
           $username = ($this->session->userdata['logged_in']['fname']);
        }
        // $username = $this->session->userdata("fname");

          echo "1";
        }else{
          echo "2";
        }
      }
    }

    public function loadStates()
    {
      $data = $this->Registermodel->fetchStates();
      echo json_encode($data);
      //print_r($data);
    }
    
    public function loadDist()
    {
      $stateID = $this->input->post('stateID');
      $data = $this->Registermodel->fetchDist($stateID);
      echo json_encode($data);
      //print_r($data);
    }

    public function logout() {

      $this->load->view('register');
    }
  }
