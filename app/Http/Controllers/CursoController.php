<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listar(){
        
        $profile = Profile::find(1);
        return $profile;

        // $user=User::find(2);
        // return $user->profile;

        // $cursos = Curso::orderBy('id', 'desc')->get();
        // return view('curso.listar', compact('cursos'));

    }
    
    public function create(){
        
        return view('curso.create');

    }

    public function store(Request $request){
        
        $curso= new Curso();

        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return $curso;
    }

    public function show(Curso $curso){//$id
        // $curso=Curso::find($id);
        return view('curso.show',compact('curso'));
    }

    public function destroy(Curso $curso){
        
        $curso->delete();
        
        return redirect()->route('curso.listar');
    }

     //Edit
     public function edit(Curso $curso){//Encuentro el Curso
    
        return view('curso.edit',compact('curso'));
  
      }

      //Update
    public function update(Request $request,Curso $curso){
            
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
     
        return redirect()->route('curso.listar');
     
      }
  
  






}
