<?php
/**
 * Created by PhpStorm.
 * User: ma
 * Date: 10.12.2018
 * Time: 20:42
 */

class Users_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getAll()
    {

        $query = $this->db->get('users');

        return $query->result();

    }

    public function getById($id)
    {
        $query = $this->db->get_where('users',[
            'id' => $id
        ]);

        $toReturn = $query->result();


        return $toReturn ? $toReturn[0] : null;
    }

    public function checkLogin($login)
    {
        $query = $this->db->get_where('users',[
            'login' => $login
        ]);

        return $query->result();
    }

    public function register($login, $pass)
    {
        //$this->input->post('login');
        $this->db->insert('users',[
            'login' => $login,
            'pass' => md5($pass),
        ]);
    }
}