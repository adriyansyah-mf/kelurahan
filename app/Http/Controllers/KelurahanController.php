<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
     public function index(){
        $kelurahan = DB::table('tb_kelurahan')->get();
        return view('kelurahan.index',['kelurahan'=> $kelurahan]);


     }

     public function delete($id){
        DB::table('tb_kelurahan')->where('id',$id)->delete();

        return redirect('/kelurahan');
     }

     public function tambah(){
         return view('kelurahan.tambah');
     }

     public function store(Request $request){
        DB::table('tb_kelurahan')->insert([
            'nama_kelurahan' => $request->namakelurahan,
            'kode_rw' => $request->rw,
            'kode_rt' => $request->rt
        ]);

        return redirect('/kelurahan');
     }

     public function edit($id){
        $kelurahan = DB::table('tb_kelurahan')->where('id',$id)->get();

        return view('kelurahan.edit',['kelurahan'=>$kelurahan]);
     }

     public function update(Request $request){
        DB::table('tb_kelurahan')->where('id',$request->id)->update([
            'nama_kelurahan' => $request->namakelurahan,
            'kode_rt' => $request->rt,
            'kode_rw' => $request->rw
        ]);


        return redirect('/kelurahan');
     }
}
