<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->call->model('user_model');
    }
	

    public function aboutUS()
    {
        echo "Testing";
    }

    public function index()
    {
        $this->call->model('user_model');
        $data['users'] = $this->user_model->getUsers();
        $this->call->view('about_us', $data);
    }

    public function add_account()
    {
        $data =  $this->user_model->insert_data($this->io->post('username'), $this->io->post('password'), $this->io->post('email'), $this->io->post('usertype'));
        $this->call->view('about_us', $data);
    }

    public function delete_data()
    {
        if($this->user_model->delete_data())
            redirect('/about_us');
            exit;
    }

        
    }

   


?>
