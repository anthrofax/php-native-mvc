<?php

class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $data['name'] = 'Edo';
        $data['age'] = 21;
        $data['job'] = 'Fullstack Web Developer';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page($nama = 'edo', $umur = 5)
    {
        $data['title'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}