<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RtController extends Controller
{
    public function index(){
        $rt = DB::table('tb_rt')->get();
        return view('rt.index',['rt'=> $rt]);


     }
     public function delete($id){
        DB::table('tb_rt')->where('id',$id)->delete();

        return redirect('/rt');
     }
     public function edit($id){
        $rt = DB::table('tb_rt')->where('id',$id)->get();

        return view('rt.edit',['rt'=>$rt]);
     }

     public function update(Request $request){
        DB::table('tb_rt')->where('id',$request->id)->update([
            'nama_rt' => $request->namart,
            'kode_rt' => $request->rt,
            'kode_rw' => $request->rw
        ]);


        return redirect('/rt');
     }
     public function tambah(){
        return view('rt.tambah');
    }

    public function store(Request $request){
       DB::table('tb_rt')->insert([
           'nama_rt' => $request->namart,
           'kode_rw' => $request->rw,
           'kode_rt' => $request->rt
       ]);

       return redirect('/rt');
    }
}
