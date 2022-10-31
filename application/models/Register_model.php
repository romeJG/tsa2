<?php

class Register_model extends CI_Model
{

    public function signUp($array)
    {
        $this->db->insert('info_users', $array);
    }

    public function login_check($username, $pass)
    {
        $this->db->where('user_uname', $username);
        $this->db->where('user_pass', $pass);

        $query = $this->db->get('info_users');

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getProfile($info)
    {
        $q = $this->db->get_where("info_users", ['user_uname' => $info]);
        return $q->result();
    }

    public function updatePass($array, $uid)
    {

        $this->db->update('info_users', $array, array('user_uname' => $uid));
    }

    public function isCurrent($check, $pass)
    {
        $q = $this->db->get_where("info_users", ['user_uname' => $pass]);
        foreach ($q->result() as $p) {
            $data = $p->user_pass;
        }

        if ($check == $data) {
            return TRUE;
        } else {
            return FALSE;
        };
    }
}
