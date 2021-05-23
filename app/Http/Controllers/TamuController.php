<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){
        $tamu = DB::table('tb_tamu')->get();

        return view('tamu.index',['tamu'=> $tamu]);
    }
    public function delete($id){
        DB::table('tb_tamu')->where('id',$id)->delete();

        return redirect('/tamu');
     }
     public function tambah(){
        return view('tamu.tambah');
    }
    public function store(Request $request){
        DB::table('tb_tamu')->insert([
            'nik' => $request->nik,
            'nama_tamu' => $request->nama,
            'alamat' => $request->alamat,
            'kode_rt' => $request->rt,
            'kode_rw' => $request->rw

        ]);

        return redirect('/tamu');
     }
     public function edit($id){
        $tamu = DB::table('tb_tamu')->where('id',$id)->get();

        return view('tamu.edit',['tamu'=>$tamu]);
     }

     public function update(Request $request){
        DB::table('tb_tamu')->where('id',$request->id)->update([
            'nama_tamu' => $request->nama,
            'kode_rw' => $request->rw,
            'kode_rt' => $request->rt,
            'nik' => $request->nik,
            'alamat' => $request->alamat
        ]);


        return redirect('/tamu');
     }
}
