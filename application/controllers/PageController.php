<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function index(){
        echo "HI, I am Page Controller";
    }

    public function aboutus(){
        echo "I am 'About Us' page";
    }

    public function blog($blog_url = 'null'){
        echo "$blog_url";

        $this->load->view('blogview');
    }

    public function demo(){
        // $data['title'] = "Hello, I am Purna Peramune!";
        $this -> load -> model('StudentModel');
        $title = $this -> StudentModel -> demo();

        $data['title'] = $title;
        $data['body'] = "This is the body of the page!";
        $data['footer'] = "This is the footer of the page!";
        $this -> load -> view('demopage', $data);
    }
}