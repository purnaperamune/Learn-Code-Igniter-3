<?php 

class StudentModel extends CI_Model{
    public function studentData(){
        $student_class = $this -> student_class();
        return $student_name = "Rohit. <br>His class is " . $student_class;
    }

    private function student_class(){
        return $student_class = "BCA";
    }

    public function student_show($id){
        if($id == '1'){
            return $result = "User 1";
        } 
        elseif ($id == '2') {
            return $result = "User 2";
        }
        
    }
}