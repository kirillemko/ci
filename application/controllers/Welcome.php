<?php


class Welcome extends CI_Controller {

	public function index()
	{
	   	$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

    public function add()
    {

        $this->load->database();




        $this->db->from('tasks');

        $this->db->where(['id', 2]);
        $this->db->where(['id', 3]);
        $this->db->where(['id', 4]);

        $query = $this->db->get();

        foreach ($query->result() as $row)
        {
            echo $row->title;
        }

        $this->load->view('header');
        $this->load->view('add',[
            'data' => $superData
        ]);
        $this->load->view('footer');
	}

    public function test()
    {
        $this->load->view('header',[
            'title' => 'test page'
        ]);
		$this->load->view('test');
		$this->load->view('footer');
	}
}
