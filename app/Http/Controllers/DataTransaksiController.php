<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    public function index()

    {
        return view('admin.datatransaksi');
    }
}
