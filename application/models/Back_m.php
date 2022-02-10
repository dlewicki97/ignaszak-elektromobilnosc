<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_m extends CI_Model  
{
    public function get_all($table) {
        if ($this->db->table_exists($table)){
            $query = $this->db->get($table);
        }else{
            $query = $this->db->get(str_replace($this->session->userdata('lang').'_', '', $table));
        }
        
        return $query->result();
    }

    public function get_all_where($table, $field, $value) {
        $this->db->where([$field => $value]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_with_limit($table,$limit,$sort = null) {
        $this->db->limit($limit);
        if($sort != null){
            $this->db->order_by('created',$sort);
        }
        if ($this->db->table_exists($table)){
            $query = $this->db->get($table);
        }else{
            $query = $this->db->get(str_replace($this->session->userdata('lang').'_', '', $table));
        }
        return $query->result();
    }


    public function get_where($table, $field, $value) {
        $this->db->where([$field => $value]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        if ($this->db->table_exists($table)){
            $query = $this->db->get($table);
        }else{
            $query = $this->db->get(str_replace($this->session->userdata('lang').'_', '', $table));
        }
        return $query->row();
    }

    public function get_prefixes(){
        $query = $this->db->get('jezyki');
        $query = $query->result();
        $prefixes = [];
        $i =0;
        foreach($query as $q){
            $prefixes[$i] = $q->prefix;
            $i++;
        }    
        return $prefixes;
    }


    public function get_subpage($page) {
        $this->db->where(['page' => $page]);
        if ($this->db->table_exists($this->session->userdata('lang').'_subpages')){
            $query = $this->db->get($this->session->userdata('lang').'_subpages');
        }else{
            $query = $this->db->get('subpages');
        }
        return $query->row();
    }

    public function get_subpage_by_table_name($table_name){
        $this->db->where(['table_name' => $table_name]);
        if ($this->db->table_exists($this->session->userdata('lang').'_subpages')){
            $query = $this->db->get($this->session->userdata('lang').'_subpages');
        }else{
            $query = $this->db->get('subpages');
        }
        return $query->row();
    }
    
    public function get_api_photos(){
        $this->db->where(['is_photo' => 1]);
        $query = $this->db->get('media');
        return $query->result();
    }

    public function get_images($table, $table_name, $id) {
            $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
            ]);

        $query = $this->db->get($table);
        return $query->result();
    }

    public function insert($table, $data) {
        // $data = $this->security->xss_clean($data);
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $data, $id) {
        // $data = $this->security->xss_clean($data);
        $this->db->where(['id' => $id]);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->delete($table);
        return $query;
    }
}