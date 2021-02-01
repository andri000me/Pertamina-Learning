<?php

class M_MasterData extends CI_Model{

	// Cek Login
    function cek_login($table,$data){      
        $query = $this->db->get_where($table,$data);

        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }

// ---------------------------------Show----------------------------------------------------------------------------


    // Get AssignEmployee
    function get_assignemployee()
    {
        $query=$this->db->from('tb_eppm')
        ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }

    // Get Workbook
    function get_workbook()
    {
        $query=$this->db->from('tb_workbook')
        ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }

     // Get Assessment
    function get_assessment()
    {
        $query=$this->db->from('tb_penilaian')
        ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }

    // Get user
    function get_user()
    {
        $query=$this->db->from('tb_user')
        ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }

// ---------------------------------Input----------------------------------------------------------------------------

    // Input Data Assign Employee
    function input_data_assign_employee($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // Input Data Workbook
    function input_data_workbook($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // Input Data Assessment
    function input_penilaian($table, $data)
    {
        $this->db->insert($table,$data);
    }

    // Input User
    function input_user($table, $data)
    {
        $this->db->insert($table,$data);
    }

// ---------------------------------Update----------------------------------------------------------------------------
    
    // Update Data AssignEmployee
    function update_data_assignemployee($table,$data,$employee_id)
    {
        $this->db->where('employee_id', $employee_id);
        $this->db->update($table,$data);  
    }

    // Update Data Workbook
    function update_data_workbook($table,$data,$workbook_id)
    {
        $this->db->where('workbook_id', $workbook_id);
        $this->db->update($table,$data);  
    }

    // Update File Workbook
    function update_data_workbook_file($table,$data,$workbook_id)
    {
        $this->db->where('workbook_id', $workbook_id);
        $this->db->update($table,$data);  
    }

    // Update Penilaian
    function update_data_penilaian($table,$data,$id_pen)
    {
        $this->db->where('id_pen', $id_pen);
        $this->db->update($table,$data);  
    }

    // Update Data User
    function update_data_user($table,$data,$user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update($table,$data);  
    }

    // Update Foto User
    function update_foto($table,$data,$user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update($table,$data);  
    }
    
// ---------------------------------Delete----------------------------------------------------------------------------
    
    // Delete Data AssignEmployee
    function DeleteDataAssignEmployee($table,$employee_id)
    {
        $this->db->delete($table,$employee_id);
    }

    // Delete Data Workbook
    function DeleteDataWorkbook($table,$workbook_id)
    {
        $this->db->delete($table,$workbook_id);
    }

    // Delete Data Penilaian
    function DeleteDataPenilaian($table,$id_pen)
    {
        $this->db->delete($table,$id_pen);
    }

    // Delete Data User
    function DeleteDataUser($table,$user_id)
    {
        $this->db->delete($table,$user_id);
    }

}