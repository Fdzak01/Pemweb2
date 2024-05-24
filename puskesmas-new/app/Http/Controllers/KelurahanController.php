<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index(){
        $list_kelurahan = Kelurahan::all();
        return view("admin.kelurahan.index",["list_kelurahan"=>$list_kelurahan]);
    }
}
