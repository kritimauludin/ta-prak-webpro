<?php

namespace App\Http\Controllers;

use App\Models\Govanda;
use Illuminate\Http\Request;

class GovandaController extends Controller
{
    public function index(){

        $data = Govanda::all();
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
       // dd($request->all());
        $data = Govanda::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/' , $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success','data berhasil di tambahkan');

    }

    public function tampilkandata($id){
      $data = Govanda::find($id);
      //dd($data);
      return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Govanda::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','data berhasil di update');
    }

    public function delete ($id){
       $data = Govanda::find($id);
       $data->delete();
       return redirect()->route('pegawai')->with('success','data berhasil di delete');
    }


}