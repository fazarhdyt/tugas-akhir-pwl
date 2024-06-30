<?php

class Portofolio extends Controller{

    public function index() {
        $data['judul'] = 'Portofolio';
        $this->view('templates/header', $data);
        $this->view('portofolio/index', $data);
        $this->view('templates/footer');
        }
        
        public function page() {
            $data['judul'] = 'Page';
            $this->view('templates/header', $data);
            $this->view('portofolio/page');
            $this->view('templates/footer');
    }
}