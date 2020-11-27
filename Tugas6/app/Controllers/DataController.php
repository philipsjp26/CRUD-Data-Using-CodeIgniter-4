<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataModel;
class DataController extends Controller
{
    public function index()
    {
        $model = new DataModel();
        $data['getData'] = $model->getData();
        return view('Tampilan/view',$data);
    }
    public function tambah()
    {
        return view('Tampilan/TambahView');
    }
    public function add()
    {
        $model = new DataModel();
        $data = array(
            'nim' => $this->request->getPost('nim'),
            'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
            'kota_asal' => $this->request->getPost('kota_asal'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nama_ortu' => $this->request->getPost('nama_ortu'),
            'alamat_ortu' => $this->request->getPost('alamat_ortu'),
            'kodepos' => $this->request->getPost('kodepos'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'status' => $this->request->getPost('status')
        );
        $model->AddData($data);
        echo '<script>alert("Berhasil Tambah Data");window.location="'.base_url('view').'"</script>';
    }

    public function edits($id){
        $model= new DataModel();
        $resultData = $model->getData($id)->getRow();
        if($resultData != NULL)
        {
            $data['getData'] = $resultData;
            return view('Tampilan/editView',$data);
        }
        else{
            echo '<script>alert("id tidak ditemukan");window.location="'.base_url('view').'"</script>';
        }
    }
    public function update(){
        $model = new DataModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nim' => $this->request->getPost('nim'),
            'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
            'kota_asal' => $this->request->getPost('kota_asal'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nama_ortu' => $this->request->getPost('nama_ortu'),
            'alamat_ortu' => $this->request->getPost('alamat_ortu'),
            'kodepos' => $this->request->getPost('kodepos'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'status' => $this->request->getPost('status')
        );
        $model->editData($data,$id);
        echo '<script>alert("Sukses Edit Data");window.location="'.base_url('view').'"</script>';
    }

    public function hapus($id){
        $model = new DataModel();
        $getData = $model->getData($id)->getRow();
        if($getData != NULL){
            $model->hapusData($id);
            echo '<script>alert("Hapus Data Berhasil");window.location="'.base_url('view').'"</script>';
        }
        else{
            echo '<script>alert("Hapus Data Gagal");window.location="'.base_url('view').'"</script>';
        }
    }
}