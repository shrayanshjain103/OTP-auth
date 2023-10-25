<?php
class Otp_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); {
        }
    }
    public function addInfo($data)
    {
        return $this->db->insert('users', $data);
    }
    public function checkLogin($email, $password)
    {
        $this->db->select('id,status,email,Password');
        $this->db->where('email', $email);
        $this->db->where('Password', $password);
        $data = $this->db->get('users')->row_array();
        if (!empty($data)) {
            if ($data['status'] == '1') {
                $this->session->set_userdata('user_data', $data);
                return 1;
            } else {
                $this->session->set_userdata('user_data', $data);
                return 0;
            }
        } else {
            return 2;
        }
    }
    public function getUserData(){
        return $this->db->get('users')->result_array();
    }
    public function sendMessage($data){
        // print_r($data);die;
        $this->db->set('notify',$data['message']);
        $this->db->where('id',$data['id']);
        $result= $this->db->update('users');
        return $result;
    }
}
