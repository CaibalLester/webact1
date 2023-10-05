<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	
    public function Getuser()
    {
        $data = $this->db->table('users')->get_all();
		return $data;
    }

    public function Selectuser($id)
    {
        $ID = $id;
        $data = $this->db->table('users')->where('id',$ID)->get();
		return $data;
    }

    public function Deleteuser($id)
    {
        $ID = $id;
        $data = $this->db->table('users')->where('id',$ID)->delete();
		return $data;
    }

    public function Saveuser($username, $password, $email, $usertype)
    {
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype,
        ];
        return $this->db->table('users')->insert($data);
    }

    public function Updateuser($Id, $username, $password, $email, $usertype)
    {
        $ID = $Id;
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype,
        ];
        return $this->db->table('users')->where('id',$ID)->update($data);
    }
}
?>
