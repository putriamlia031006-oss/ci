<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }
    public function index()
    {
        $data['anggota'] = $this->anggota_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');

    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }
    public function simpan()
    {
        $data= [
            'nama_anggota'=> $this->input->post('nama_anggota')
        ];

        $this->anggota_model->insert($data);
        redirect('anggota');
    }
    public function hapus($Nomor_anggota)
    {
        // if($this->Kategori_model->is_used($id)){
        //     $this->session->set_flashdata('error', 'Kategori tidak bisa dihapus karena masih digunakan');
        // } else {
            $this->anggota_model->delete($Nomor_anggota);
            $this->session->set_flashdata('success', 'Data Berhasil dihapus');
        // }
        redirect('anggota');
    }
    public function edit($Nomor_anggota)
    {
        $data['anggota']= $this->anggota_model->get_by_id($Nomor_anggota);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update($Nomor_anggota)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'required');
        if($this->form_validation->run()==FALSE){

        }else{
            $data=[
                'nama_anggota'=>$this->input->post('nama_anggota')
            ];
            $this->anggota_model->update($Nomor_anggota, $data);
            $this->session->set_flashdata('success', 'Data Berhasil di uopdate');
            redirect('anggota');
        }
    }
}