<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{
    public function indexff(){
        $this->load-> model('StudentModel');

        // $student = $this -> StudentModel -> studentData();  // Method 1
        
        $student = new StudentModel; // Method 2
        $student = $student -> studentData();
        echo "Student Name: ". $student;
    }
}
?>