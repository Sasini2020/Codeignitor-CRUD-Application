<?php 

    class Home extends CI_Controller{

        public function index(){

            $this->load->helper('url');
            $this->load->model('Crudmodel');
            $records=$this->Crudmodel->getRecords(); 
            $this->load->view('home',['records'=>$records]);
        }
    
        public function create(){
             $this->load->view('create');
        }

        public function save(){
            $this->form_validation->set_rules('name','User name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('job','Job','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('repeat_password','Repeat Password','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
         
            if($this->form_validation->run()){
                
                $data=$this->input->post();
                $this->load->model('Crudmodel');

                if($this->Crudmodel->saveRecords($data)){
                    $this->session->set_flashdata('response','Record Saved Successfully !');
                }
                else{
                    $this->session->set_flashdata('response','Record Failed To Save !');
                }
                return redirect('home');
            }
            else{
                $this->load->view('create');
            }
        }

        public function edit($record_id){
            $this->load->model('Crudmodel');
            $record = $this->Crudmodel->getAllRecords( $record_id);
            $this->load->view('update',['record'=>$record]);
        }     

        public function update($record_id){

            $this->form_validation->set_rules('name','User name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('job','Job','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('repeat_password','Repeat Password','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
         
            if($this->form_validation->run()){
                
                $data=$this->input->post();
                $this->load->model('Crudmodel');

                if($this->Crudmodel->updateRecords($record_id,$data)){
                    $this->session->set_flashdata('response','Record Updated Successfully !');
                }
                else{
                    $this->session->set_flashdata('response','Record Failed To Update !');
                }
                return redirect('home');
            }
            else{
                $this->load->view('update');
            }
        }

        public function delete($record_id){

            $this->load->model('Crudmodel');
            if($this->Crudmodel->deleteRecord($record_id)){
                $this->session->set_flashdata('response','Record Deleted Successfully !');

            }
            else{
                $this->session->set_flashdata('response','Failed To Delete Your Record !');

            }
            return redirect('home');

           
        }
    }
?>