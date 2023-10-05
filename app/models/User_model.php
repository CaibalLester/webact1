<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	
    public function getUser()
    {
        $data = $this->db->table('users')->get_all();
		return $data;
    }

    public function save($username, $password, $email, $usertype)
    {
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype,
        ];
        return $this->db->table('users')->insert($data);
    }

    public function select($id)
    {
        $userId = $id;
        $data = $this->db->table('users')->where('id',$userId)->get();
		return $data;
    }

    public function update($id, $username, $password, $email, $usertype)
    {
        $userId = $id;
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype,
        ];
        return $this->db->table('users')->where('id',$userId)->update($data);
    }

    public function delete($id)
    {
        $userId = $id;
        $data = $this->db->table('users')->where('id',$userId)->delete();
		return $data;
    }

}
?>
