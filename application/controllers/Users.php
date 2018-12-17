<?php
/**
 * Created by PhpStorm.
 * User: ma
 * Date: 10.12.2018
 * Time: 19:07
 */

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');


    }


    public function view($id)
    {

        $user = $this->users_model->getById($id);

        if( !$user ){
            header('location: /users/index');
        }

        $this->load->view('header',[
            'title' => 'Register page'
        ]);

        $this->load->view('users/view',[
            'user' => $user
        ]);

        $this->load->view('footer');

    }

    public function index()
    {
        $users = $this->users_model->getAll();


        $this->load->view('header',[
            'title' => 'Index page'
        ]);

        $this->load->view('users/list',[
            'users' => $users
        ]);

        $this->load->view('footer');



    }

    public function login()
    {


    }

    public function register()
    {

        $this->load->view('header',[
            'title' => 'Register page'
        ]);
        if( $this->input->post() ){

            if( $this->users_model->checkLogin($this->input->post('login')) ){
                //error
            } else {
                if( !$this->input->post('login') || !$this->input->post('pass') ){
                    //error
                } else {
                    $this->users_model->register(
                        $this->input->post('login'),
                        $this->input->post('pass')
                    );
                }
            }

        } else {
            $this->load->view('users/register',[
                'data' => $this->input->post()
            ]);
        }

        $this->load->view('footer');
    }

}