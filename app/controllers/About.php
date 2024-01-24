<?php

class About {
    public function index() {
        echo "About/index";
    }

    public function page($nama = 'edo', $umur = 5) {
        echo "Halo, nama saya $nama, umur saya $umur tahun.";
    }
}