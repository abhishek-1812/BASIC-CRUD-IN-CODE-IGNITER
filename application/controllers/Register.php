<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * 
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 
     * @return register()
     */
    public function index()
    {
        $this->load->model('Usermodel');
        $records = $this->Usermodel->allRecord();
        $data = array();
        $data['records'] = $records;
        $this->load->view('List', $data);
    }
    public function registerForm()
    {
        $this->load->model('Usermodel');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {

            $this->load->view('RegisterForm');

        } else {
            $forms = array();
            $forms['name'] = $this->input->post('name');
            $forms['age'] = $this->input->post('age');
            $forms['mobile'] = $this->input->post('mobile');
            $forms['email'] = $this->input->post('email');
            $this->Usermodel->insertRecord($forms);

            $this->session->set_flashdata('success', 'Record Inserted Successfully');

            redirect(site_url('Register/registerForm'));
        }
    }
   
    public function edit($id)
    {
        $this->load->model('Usermodel'); 
        $results = $this->Usermodel->getUser($id);
        $data['result'] = $results;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {

            $this->load->view('editForm', $data);
        } else {

            $forms = array();
            $forms['name'] = $this->input->post('name');
            $forms['age'] = $this->input->post('age');
            $forms['mobile'] = $this->input->post('mobile');
            $forms['email'] = $this->input->post('email');

            $this->Usermodel->updateUser($id, $forms);

            $this->session->set_flashdata('success', 'Record Inserted Successfully');

            redirect(site_url('Register/'));
        }
    }
    public function delete($id) 
    {
        $this->load->model('Usermodel');
        $record = $this->Usermodel->getUser($id);

        if (empty($record)) {

            $this->session->set_flashdata('failure', 'Record Not Found');
            redirect(site_url('Register/'));

        }
        $this->Usermodel->deleteUser($id);
        $this->session->set_flashdata('success', 'Record Inserted Successfully');

        redirect(site_url('Register/'));
        //redirect(base_url().'Register/index.php');
    }
}
?>
