<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->call->model('User_model');
    }
	
    public function ShowData() 
    {
        $data = [
            'users' => $this->User_model->Getuser(),
        ];
        $this->call->view('about_us', $data);
    }

    public function Save() 
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $usertype = $_POST['usertype'];
        
        if($id != null) 
        {
            $result = $this->User_model->Updateuser($id, $username, $password, $email, $usertype);
            if($result) 
            {
                $data = [
                    'users' => $this->User_model->Getuser(),
                    'msg' => 'Updated!',
                ];
                $this->call->view('about_us', $data);
            }
            else
            {
                $data = [
                    'users' => $this->User_model->Getuser(),
                    'msg' => 'Error!',
                ];
                $this->call->view('about_us', $data);
            }
        }
        else
        {
            $result = $this->User_model->Saveuser($username, $password, $email, $usertype);
            if($result) 
            {
                $data = [
                    'users' => $this->User_model->Getuser(),
                    'msg' => 'Saved!',
                ];
                $this->call->view('about_us', $data);
            }
            else
            {
                $data = [
                    'users' => $this->User_model->Getuser(),
                    'msg' => 'Error!',
                ];
                $this->call->view('about_us', $data);
            }
        };
    }

    public function Delete($id) 
    {
        $ID = $id;
        $result = $this->User_model->Deleteuser($ID);
        if($result) 
        {
            $data = [
                'users' => $this->User_model->Getuser(),
                'msg' => 'Deleted!',
            ];
            $this->call->view('about_us', $data);
        }
        else
        {
            $data = [
                'users' => $this->User_model->Getuser(),
                'msg' => 'Error!',
            ];
            $this->call->view('about_us', $data);
        }
    }

    public function Edit($id) 
    {
        $ID = $id;
        $data = [
            'select_us' => $this->User_model->Selectuser($ID), 
            'users' => $this->User_model->Getuser(),
        ];

        $this->call->view('about_us', $data);
    }
    }
?>
