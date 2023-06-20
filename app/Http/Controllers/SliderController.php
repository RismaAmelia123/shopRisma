<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    function show(){
        $data ['slider'] = Slider::all();
        return view ('slider',$data);
    }
    function add(){
        $data = ([
            'action' => url('slider/create'),
            'tombol' => 'Simpan',
            'slider' => (object)[
                'foto' => '',
            ]
        ]);
        return view('form_slider',$data);
    }
    function create(Request $request){
        Slider::create([
            'foto'=> $request->file('foto')->store('foto'),
        ]);
        return redirect('slider');
    }
    function delete($id){
        Slider::where('id_slider',$id)->delete();
        return redirect('slider');
    }
    function edit($id){
        $data ['slider'] = Slider::find($id);
        $data ['action'] = url('slider/update').'/'.$data['slider']->id_slider;
        $data ['tombol'] = 'Update';
        return view('form_slider',$data);
    }
    function update (Request $request){
        Slider::where('id_slider',$request->id)->update([
            'foto'=> $request->file('foto')->store('foto'),
        ]);
        return redirect('slider');
    }
}
