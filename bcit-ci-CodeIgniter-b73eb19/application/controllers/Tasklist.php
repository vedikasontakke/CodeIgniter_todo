<?php
class TaskList extends CI_controller{

    function index(){

        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['todo'] = $users;

        $this->load->view('list', $data);
    }

    function add(){

        $this->load->model('User_model');

        $this -> form_validation -> set_rules('task' ,'Task' ,'required');
        $this -> form_validation -> set_rules('subTask' ,'SubTask' ,'required');

        if($this->form_validation->run() == false){

            $this->load->view('add');

        }else{
            ///save record to database 
            $formArray = array();
            $formArray['task'] = $this->input->post('task');
            $formArray['subTask'] = $this->input->post('subTask');
           // $formArray['created_at'] = date('Y-m-d');
            $this->User_model->add($formArray);
            $this->session->set_flashdata('success','Record added successfully!');
            redirect(base_url().'index.php/TaskList/index');
        }
    }

    function edit($userId){

        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);
        $data = array();
        $data['todo'] = $user;

        $this -> form_validation -> set_rules('task' ,'Task' ,'required');
        $this -> form_validation -> set_rules('subTask' ,'subTask' ,'required');

        if($this->form_validation->run() == false){

            $this->load->view('edit', $data);

        }else{

            $formArray = array();
            $formArray['task'] = $this->input->post('task');
            $formArray['subTask'] = $this->input->post('subTask');
            $this->User_model->updateUser($userId , $formArray);

            $this->session->set_flashdata('success','Record updated successfully!');
            redirect(base_url().'index.php/TaskList/index');

        }   
    }

    function delete($userId){

        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);

        if(empty($user)){

            $this->session->set_flashdata('failure','Record not found in database');
            redirect(base_url().'index.php/TaskList/index');
        }
        $this->User_model->deleteUser($userId);
        $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/TaskList/index');
    }
}
?>