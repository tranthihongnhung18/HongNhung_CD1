<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hoten='nhung';
        $danhsach =["toan","ly","hoa"];
        return view('frontend.home',['name' =>$hoten,'list'=>$danhsach]);
    }
}
