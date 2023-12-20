<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrutaController extends Controller
{
    public function index(){
       $frutas = DB::table('frutas')
            ->orderBy('id','desc')
            ->get();

    return view('frutas.index',[
        'frutas'=>$frutas
        ]);
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();

        return view('frutas.detail',[
            'fruta' =>  $fruta
        ]);
    }

    public function create(){
        return view('frutas.create');
    }

    public function save(Request $request){
        //Guardar registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')

        ));
        return redirect()->route('frutas.index')->with('status','fruta creada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id', $id)->delete();
        return redirect()->route('frutas.index')->with('status','fruta borrada correctamente');

    }

    public function edit($id){
        //Sacar el registro de la bd
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //Pasarle a la vista el objeto y rellenar el formulario
        return view('frutas.create',[
            'fruta'=>$fruta
        ]);
    }
    public function update(Request $request){
        //Actualizar registro
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id', $id)->update(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')

        ));
        return redirect()->route('frutas.index')->with('status','fruta actualizada correctamente');
    }
}
