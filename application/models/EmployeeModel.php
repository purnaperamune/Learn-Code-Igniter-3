<?php 

class EmployeeModel extends CI_Model{
    public function getEmployee(){
        $query = $this -> db -> get('employee');
        return $query -> result();
    }

    public function editEmployee($id){
        $query = $this -> db -> get_where('employee', ['id' => $id]);
        return $query -> row();
    }

    public function insertEmployee($data){
        $this -> db -> insert('employee', $data);
    }
    
}