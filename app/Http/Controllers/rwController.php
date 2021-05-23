<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class rwController extends Controller
{
    public function index(){
        $rw = DB::table('tb_rw')->get();
        return view('rw.index',['rw'=> $rw]);


     }
     public function edit($id){
        $rw = DB::table('tb_rw')->where('id',$id)->get();

        return view('rw.edit',['rw'=>$rw]);
     }

     public function update(Request $request){
        DB::table('tb_rw')->where('id',$request->id)->update([
            'nama_rw' => $request->namarw,
            'kode_rw' => $request->rw
        ]);


        return redirect('/rw');
     }
     public function delete($id){
        DB::table('tb_rw')->where('id',$id)->delete();

        return redirect('/rw');
     }
     public function tambah(){
        return view('rw.tambah');
    }

    public function store(Request $request){
       DB::table('tb_rw')->insert([
           'nama_rw' => $request->namarw,
           'kode_rw' => $request->rw

       ]);

       return redirect('/rw');
    }
}
