<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeritaUmkmController extends Controller
{
    //
    public function index() {
        return view('ceritaUmkmPage');
    }
    public function read() {
        return view('ceritaUmkmReadPage');
    }
}
