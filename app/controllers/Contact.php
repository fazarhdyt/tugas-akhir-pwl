<?php

class Contact extends Controller{

    public function index() {
        $data['judul'] = 'Contact';
        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer');
        }
        
        public function page() {
            $data['judul'] = 'Page';
            $this->view('templates/header', $data);
            $this->view('contact/page');
            $this->view('templates/footer');
    }
}