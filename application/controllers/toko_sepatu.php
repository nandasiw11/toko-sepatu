<?php
class toko_sepatu extends CI_Controller
{
    public function index()
    {$this->load->view('form_toko_sepatu' );}

    public function pesan()
    { 
        $this->form_validation->set_rules('nama' , 'Nama Pemesan' , 'required' ,
            ['required' => 'Nama Pemesan Harus diisi']);

        $this->form_validation->set_rules('telepon' , 'No. Telepon' , 'required|numeric' ,
            ['required' => 'No. Telepon Harus diisi' ,
             'numeric' => 'No. Telepon berupa angka']);

        $this->form_validation->set_rules('merk' , 'Merk Sepatu' , 'required' ,
             ['required' => 'Merk Sepatu harus dipilih']);

        $this->form_validation->set_rules('ukuran' , 'Ukuran Sepatu' , 'required' ,
             ['required' => 'Ukuran Sepatu harus dipilih']);
 
        if ($this->form_validation->run() !=true){$this->load->view('form_toko_sepatu');}
        else
        {
            $data = [
            'nama' => $this->input->POST('nama'),
            'telepon' => $this->input->POST('telepon'),
            'merk' => $this->input->POST('merk'),
            'ukuran' => $this->input->POST('ukuran')];

            $this->load->view('data_toko_sepatu' , $data);
            }
    }
}