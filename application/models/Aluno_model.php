<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Aluno_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get aluno by id
     */
    function get_aluno($id)
    {
        return $this->db->get_where('alunos',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all alunos count
     */
    function get_all_alunos_count()
    {
        $this->db->from('alunos');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all alunos
     */
    function get_all_alunos($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('alunos')->result_array();
    }
        
    /*
     * function to add new aluno
     */
    function add_aluno($params)
    {
        $this->db->insert('alunos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update aluno
     */
    function update_aluno($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('alunos',$params);
    }
    
    function aprovar_aluno($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('alunos',$params);
        
    }
    
    
    /*
     * function to delete aluno
     */
    function delete_aluno($id)
    {
        return $this->db->delete('alunos',array('id'=>$id));
    }
}
