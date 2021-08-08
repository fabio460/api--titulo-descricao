<?php

namespace App\Http\Controllers;
use App\Models\crud_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class crud_controller extends Controller
{
    
    public function index()
    {
        //return crud_model::all() fff;
        return DB::select('SELECT id,titulo,descricao FROM crud_models');
    }
    public function store(Request $request)
    {
        $mod = new crud_model();
        $mod->titulo= $request->input('titulo');
        $mod->descricao= $request->input('descricao');
        $mod->save();
     
    }
   
    public function update(Request $request, $id)
    {
        $var = crud_model::findOrFail($id);
        $var->update($request->all());
    }

    public function destroy($id)
    {
        $var = crud_model::findOrFail($id);
        $var->delete();
    }
}


