<?php
class Otp_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Otp_model');
        $this->load->library('session');
    }

    //used to load the intial view
    public function index()
    {
        $this->load->view('otp');
    }

    //used to set the data and otp in session
    public function submit()
    {
        $otp = mt_rand(1000, 9999);
        $this->session->set_userdata('registration_otp', $otp);
        $data = array(
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'mobile' => $this->input->post('mobile')
        );
        $this->session->set_userdata('user_data', $data);
        redirect('Otp_controller/verifyUser');
    }

    //Used to show the otp on verification page before login
    public function verifyUser()
    {
        $otp = $this->session->userdata('registration_otp');
        $data['otp'] = $otp;
        $this->load->view('otp_verification', $data);
    }

    //used to load the page the after sign up
    public function success()
    {
        $user_data =  $this->session->userdata('user_data');
        if (!empty($user_data)) {
            // User is already logged in, redirect to the admin dashboard or another page
            $this->load->view('success_show');
        } else {
            $this->load->view('login');
        }
    }

    //will check whether the user login or admin
    public function login()
    {
        $user_data = $this->session->userdata('user_data');
        if (!empty($user_data) && $user_data['status'] == '1') {
            // User is already logged in, redirect to the admin dashboard or another page
            redirect('Otp_controller/admin_dashboard');
        } else if (!empty($user_data) && $user_data['status'] == '0') {
            // User is already logged in, redirect to the admin dashboard or another page
            redirect('Otp_controller/user_page');
        } else {
            $this->load->view('login');
        }
    }


    //will used to login 
    public function loginForm()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->Otp_model->checkLogin($email, $password);
        if ($result == 1) {
            redirect('otp_controller/admin_dashboard');
        } else if ($result == 0) {
            redirect('Otp_controller/user_page');
        } else {
            redirect('Otp_controller/login');
        }
    }

    //Used to load the view 
    public function user_page()
    {
        $user = $this->session->userdata('user_data');
        if (!empty($user) && ($user['status'] == '0')) {
            $this->load->view('user_home');
        } else {
            redirect('Otp_controller/login');
        }
    }


    //used to how the admin dashboard 
    public function admin_dashboard()
    {
        // print_r($_SESSION);
        $user_admin = $this->session->userdata('user_data');
        if (!empty($user_admin) && ($user_admin['status'] == '1')) {
            $this->load->view('admin');
        } else {
            redirect('Otp_controller/login');
        }
    }

    //used to logout 
    public function logout()
    {
        $this->session->unset_userdata('user_data'); // Unset the correct session variable
        redirect('Otp_controller/login');
    }

    //used tp verify the otp before login
    public function verify()
    {
        $userdata = $this->session->userdata('user_data');
        $entered_otp = $this->input->post('otp');
        $stored_otp = $this->session->userdata('registration_otp');
        if ($entered_otp == $stored_otp) {
            $this->Otp_model->addInfo($userdata);
            $result = $this->db->affected_rows();
            if ($result > 0) {
                echo 1;
                redirect('otp_controller/success');
            } else {
                redirect('otp_controller/verifyUser');
                echo 2;
            }
        }
    }

    //used to display all the data in the datatable
    public function getUsers()
    {
        $user = $this->Otp_model->getUserData();
        $data['data'] = $user;
        echo json_encode($data);
    }

    //used to add message in the table of the database
    public function addMessage()
    {
        $data = array(
            'message' => $this->input->post('message'),
            'id' => $this->input->post('id')
        );
        $result = $this->Otp_model->sendMessage($data);
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function getNotification(){
        $user_id=$this->session->user_data['id'];
        $result=$this->Otp_model->get_Notify($user_id);
        // print_r($result);die;
        if(!empty($result)){
            echo json_encode($result);
        }else{
            echo 0;
        }
    }
}
