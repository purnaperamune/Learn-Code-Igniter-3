<?php 

class EmployeeModel extends CI_Model{
    public function getEmployee(){
        $query = $this -> db -> get('employee');
        return $query -> result();
    }

    public function insertEmployee($data){
        $this -> db -> insert('employee', $data);
    }
}