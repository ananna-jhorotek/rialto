<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Sanker Saha
 * Date: 28-01-2017
 * Time: 1:30 AM
 */
class Blog_m extends CI_Model{

    public function get_allBlog(){
        $resource = $this->db->get('tbl_blogs');

        return $resource->result_array();

    }

    public function get_blog($limit,$offset){
        $user_id = $this->session->userdata('user_id');

        $this->db->where('created_by',$user_id);
        $this->db->order_by('id','desc');
        $this->db->limit($limit,$offset);
        $query = $this->db->get('tbl_blogs');

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }

    }

    public function submit($posts){

        $this->db->insert('tbl_blogs',$posts);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }

    public function edit_row($id){
        $this->db->where('id',$id);
        $query = $this->db->get('tbl_blogs');

        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update($id, Array $posts){
        
        return $this->db->where('id',$id)
                        ->update('tbl_blogs',$posts);

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){

        $this->db->where('id',$id);
        $this->db->delete('tbl_blogs');

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function num_rows(){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->where('created_by',$user_id)
                          ->select('title');
            $resource = $this->db->get('tbl_blogs');
        if($resource)
        {
            return $resource->num_rows();
        }
        else
        {
            return false;
        }
    }



    public function num_rowsForSearch($searchData){

        $this->db->like('desc',$searchData)
            ->select('*');
        $resource = $this->db->get('tbl_blogs');
        return $resource->num_rows();

    }

    public function searchResult($searchData, $limit, $offset){

        $this->db->like('desc',$searchData)
                 ->limit($limit, $offset)
            ->select('*');
        $resource = $this->db->get('tbl_blogs');

        if($resource->num_rows() > 0){
            return $resource->result();
        }
        else
        {
            return false;
        }


    }




}