<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	
    public function getUsers()
    {
        return $this->db->table('users')->get_all();
    }

    public function insert_data($username, $password, $email, $usertype)
    {
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype
        );

        $this->db->table('users')
                 ->insert($data)
                 ->exec();

                 if($result)
                 return true;
    }
	
    public function delete_data($id)
    {
        $result = $this->db->table('users')->where(array('id' => $id))->delete()->exec();
        if($result)
        return true;
    }
   
}
?>
