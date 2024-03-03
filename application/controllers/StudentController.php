<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{
    public function index(){
        $this->load-> model('StudentModel');

        // $student = $this -> StudentModel -> studentData();  // Method 1

        $student = new StudentModel; // Method 2
        $student = $student -> studentData();

        echo "Student Name: ". $student;
    }

    public function show($id){
        // echo $id;
        $this -> load -> model('StudentModel', 'stud'); // Giving a short name
        $selected_stud = $this -> stud -> student_show($id); 
        echo $selected_stud;
    }
}