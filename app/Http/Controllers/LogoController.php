<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    function show(){
        $data ['logo'] = Logo::all();
        return view ('logo',$data);
    }
    function add(){
        $logo = Logo::first();
        if ($logo){
            $data = [
                'foto' => $logo->foto,
                'action' => '/logo/update/'.$logo->id_logo
            ];
            return view('logo',$data);
        }else{
            $data = [
                'foto' => '',
                'action' => '/logo/create',
            ];
            return view('logo',$data);
        }
    }
    function create(Request $request){
        Logo::create([
            'foto'=> $request->file('foto')->store('foto'),
        ]);
        return redirect('logo');
    }
    function update (Request $request){
        $data = Logo::where('id_logo',$request->id)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Logo::where('id_logo',$request->id)->update([
            'foto' => $foto,
        ]);
        return redirect('logo');
    }
}
