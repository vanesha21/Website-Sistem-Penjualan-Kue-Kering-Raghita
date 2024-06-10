<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Keranjang extends CI_Model {
 
    public function read_all_produk()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    public  function get_produk_id($id)
    {
        $this->db->select('produk');
        $this->db->from('produk');
        $this->db->where('id',$id);
        return $this->db->get();
    }   
 
    public function tambah_customer($data)
    {
        $this->db->insert('customer', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
 
    public function tambah_order($data)
    {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
 
    public function tambah_detail_order($data)
    {
        $this->db->insert('order_detail', $data);
    }

    public function read_all_keranjang_by_id_user()
    {
        $id_user = $this->session->userdata('id');
        $sql = "SELECT
        k.id AS 'k_id',
        k.id_user AS 'k_id_user',
        k.id_produk AS 'k_id_produk',
        k.jumlah AS 'k_jumlah',
        p.gambar AS 'p_gambar',
        p.nama AS 'p_nama',
        p.harga AS 'p_harga'
        FROM keranjang AS k
        INNER JOIN produk AS p ON k.id_produk=p.id
        WHERE k.id_user='$id_user'
        ORDER BY k.id ASC;
        ";
        return $this->db->query($sql)->result_array();
    }

    public function update_keranjang_by_id()
    {
        $id_keranjang = $this->input->post('id_keranjang');
        $id_user = $this->input->post('id_user');
        $id_produk = $this->input->post('id_produk');
        $jumlah = $this->input->post('jumlah');
        $this->db->query("UPDATE keranjang SET jumlah='$jumlah' WHERE id='$id_keranjang' AND id_user='$id_user' AND id_produk='$id_produk'");
    }

    public function delete_keranjang_by_id($id_keranjang, $id_user, $id_produk) { $this->db->query("DELETE FROM keranjang WHERE id='$id_keranjang' AND id_user='$id_user' AND id_produk='$id_produk'"); }
}
?>