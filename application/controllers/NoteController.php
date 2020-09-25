<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class NoteController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('note_model');
        }
        public function index()
        {
            
            $this->load->view('header');
            $this->load->view('Note/noteView');
            $this->load->view('footer');

        }
        public function saveNote()
        {
            // echo("hello from save note");
            $dataAllNote = array(
                'branchCode' => $this->input->post('branchCode'), 
                'date' => $this->input->post('reportdate'), 
                'all_1000' => $this->input->post('1k'), 
                'all_500' => $this->input->post('5h'), 
                'all_200' => $this->input->post('2h'), 
                'all_100' => $this->input->post('1h'), 
                'all_50' => $this->input->post('50'), 
                'all_20' => $this->input->post('20'), 
                'all_10' => $this->input->post('10'), 
                'all_5' => $this->input->post('5'), 
                'all_2' => $this->input->post('2'), 
                'all_1' => $this->input->post('1'), 
            );
            $dataMutilatedNote = array(
                'branchCode' => $this->input->post('branchCode'), 
                'date' => $this->input->post('reportdate'), 
                'mutilated_1000' => $this->input->post('m1k'), 
                'mutilated_500' => $this->input->post('m5h'), 
                'mutilated_200' => $this->input->post('m2h'), 
                'mutilated_100' => $this->input->post('m1h'), 
                'mutilated_50' => $this->input->post('m50'), 
                'mutilated_20' => $this->input->post('m20'), 
                'mutilated_10' => $this->input->post('m10'), 
                'mutilated_5' => $this->input->post('m5'), 
                'mutilated_2' => $this->input->post('m2'), 
                'mutilated_1' => $this->input->post('m1'), 
            );
            $dataFreshNote = array(
                'branchCode' => $this->input->post('branchCode'), 
                'date' => $this->input->post('reportdate'), 
                'fresh_1000' => $this->input->post('f1k'), 
                'fresh_500' => $this->input->post('f5h'), 
                'fresh_200' => $this->input->post('f2h'), 
                'fresh_100' => $this->input->post('f1h'), 
                'fresh_50' => $this->input->post('f50'), 
                'fresh_20' => $this->input->post('f20'), 
                'fresh_10' => $this->input->post('f10'), 
                'fresh_5' => $this->input->post('f5'), 
                'fresh_2' => $this->input->post('f2'), 
                'fresh_1' => $this->input->post('f1')
            );
            
            print_r($dataFreshNote);
            $this->note_model->insert_allNote('allnote',$dataAllNote);
            $this->note_model->insert_allNote('mutilatednote',$dataMutilatedNote);
            $this->note_model->insert_allNote('freshnote',$dataFreshNote);
            header('location:'.base_url().'NoteController');
        }
    }

?>