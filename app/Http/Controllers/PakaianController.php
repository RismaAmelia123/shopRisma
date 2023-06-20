<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Logo;
class PakaianController extends Controller
{
    function show(){
        $data ['product'] = Product::all();
        $data ['slider'] = Slider::all();
        return view ('beranda',$data);
    }
    function detail($id){
        $data ['product'] = Product::find($id);
        return view('detail',$data);
    }
    function logo(){
        $data ['logo'] = Logo::first();
        return view('login',$data);
    }
    function logo1(){
        $data ['logo'] = Logo::first();
        return view('login_admin',$data);
    }
}