<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    // View All data user
    public function listing(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id_user', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail User untuk edit data
    public function detail($id_user){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_user', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // Login User
    public function login($username,$password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array( 'username'  => $username,
                                'password'  => SHA1($password)
                            ));
        $this->db->order_by('id_user', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // Tambah Data user
    public function tambah($data){
        $this->db->insert('users', $data);
    }

    // Edit data user
    public function edit($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('users', $data);
    }

    // Delete data user
    public function delete($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('users', $data);
    }
}
                        
/* End of file User.php */
    
                        