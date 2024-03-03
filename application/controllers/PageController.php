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
}