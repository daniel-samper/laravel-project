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

    public function save(){

    }
}
