<?php
namespace App\Models;
use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'tb_data';
    public function getData($id=false)
    {
        if($id === false)
        {
            return $this->table('tb_data')->get()->getResultArray();
        }
        else{
            return $this->table('tb_data')->where('id',$id)->get();
        }
    }

    public function AddData($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editData($data,$id){
        $builder = $this->db->table($this->table);
        $builder->where('id',$id);
        return $builder->update($data);
    }
    public function hapusData($id){
        $builder = $this->db->table($this->table);
        return $builder->delete(['id'=>$id]);
    }
    
}