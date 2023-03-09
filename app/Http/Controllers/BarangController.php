<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index() {
        $data['barang'] = Barang::all();

        return view ('index', $data);
    }
}
