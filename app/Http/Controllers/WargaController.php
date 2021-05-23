<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = DB::table('tb_warga')->get();

        return view('warga.index',['warga'=> $warga]);
    }
    public function delete($id){
        DB::table('tb_warga')->where('id',$id)->delete();

        return redirect('/warga');
     }
     public function tambah(){
        return view('warga.tambah');
    }
    public function store(Request $request){
        DB::table('tb_warga')->insert([
            'nik' => $request->nik,
            'nama_warga' => $request->nama,
            'jenis_kelamin' => $request->jeniskelamin,
            'kode_rt' => $request->rt,
            'kode_rw' => $request->rw

        ]);

        return redirect('/warga');
     }
     public function edit($id){
        $warga = DB::table('tb_warga')->where('id',$id)->get();

        return view('warga.edit',['warga'=>$warga]);
     }

     public function update(Request $request){
        DB::table('tb_warga')->where('id',$request->id)->update([
            'nama_warga' => $request->nama,
            'kode_rw' => $request->rw,
            'kode_rt' => $request->rt,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jeniskelamin
        ]);


        return redirect('/warga');
     }
}
