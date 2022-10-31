<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('register_model', null, true);
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('include/header', $data);
        $this->load->model('register_model', null, true);
        $this->load->view('home_view');
    }



    public function register()
    {
        $data['title'] = 'Register';
        $this->load->view('include/header', $data);
        $this->load->database('info_users');

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|alpha');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_rules(
            'uname',
            'Username',
            'trim|required|alpha_numeric|min_length[6]'
        );

        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('cpass', 'Password Confirmation', 'required|matches[pass]|min_length[8]');

        $this->form_validation->set_rules('bday', 'Birthday', 'trim|required');
        $this->form_validation->set_rules('contact', 'Contact Number', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register_view');
        } else {

            $data = [
                'user_fname' => $_POST['fname'],
                'user_mname' => $_POST['mname'],
                'user_lname' => $_POST['lname'],
                'user_uname' => $_POST['uname'],
                'user_bday' => $_POST['bday'],
                'user_contact' => $_POST['contact'],
                'user_email' => $_POST['email'],
                'user_pass' => $_POST['pass'],

            ];

            $this->register_model->signUp($data);
            $this->load->view('login_view');
        };
    }
    public function login()
    {

        $data['title'] = 'Login';

        $this->load->view('include/header', $data);
        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        } else {
            $username = $this->input->post('username');
            $pass = $this->input->post('password');

            $this->load->model('register_model');
            if ($this->register_model->login_check($username, $pass)) {

                redirect('home/profile/' . $username);
            } else {
                $this->load->view('login_view');
            }
        };
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $this->load->view('include/header', $data);

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('register_model');

        $uid = $this->uri->segment(3);

        $profile = array(
            'data' => $this->register_model->getProfile($uid)
        );


        $this->form_validation->set_rules('currentPass', 'Password', 'required|min_length[8]|callback_password_matches[' . $uid . ']');
        $this->form_validation->set_rules('newPass', 'New Password', 'required|min_length[8]');
        $this->form_validation->set_rules(
            'confirmPass',
            'Password Confirmation',
            'required|matches[newPass]|min_length[8]',
            array('matches' => 'New password and Re-Enter new password should be the same.')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('profile_view', $profile);
        } else {

            $data = ['user_pass' => $_POST['newPass']];

            $this->register_model->updatePass($data, $uid);
            $this->load->view('profile_view', $profile);
        };
    }


    public function password_matches($pass, $uid)
    {
        $this->load->model('register_model');

        if ($this->register_model->isCurrent($pass, $uid)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_matches', 'Current password is not the same with the old password');
            return FALSE;
        }
    }
}
