<?php

class News_model extends CI_Model{

    public function getAll($limit,$offset){
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->order_by('news_id','DISC')->where('news_status','Active');
        return $this->db->get('news')->result_array();
    }

    public function countAll(){
        return $this->db->where('news_status','Active')->get('news')->num_rows();
    }

    public function getAllCate($limit,$offset){
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->order_by('news_id','DISC')->where('news_status','Active');
        return $this->db->get('news')->result_array();
    }

    public function countAllCate(){
        return $this->db->where('news_status','Active')->get('news')->num_rows();
    }







}