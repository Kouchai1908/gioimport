<?php

namespace App\Controllers;

class Pemasukan extends BaseController {


    public function index(): String {

        return view ('template/header')
        . view('pemasukan/index')
        . view ('template/footer');
    }
}