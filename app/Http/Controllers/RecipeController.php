<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Recipe;
use App\Models\User;


class RecipeController extends Controller
{

    /**
     * Muestra el display de todas las recetas con paginación
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 

        $recipe =Recipe::orderBy('id', 'desc')->simplePaginate(6);
        return view('recipe', [
            'report' => $recipe,
        ]); 
        
    }



    public function createRecipe(Request $request){


        $rules = [
            'titulo' => 'required|unique:recipes,titulo',
            'contenido' => 'required',
            'imagen' => 'image|max:2000|mimes:jpg,bmp,png,jpeg',       
        ];
        $messages = [
            'titulo.unique' => 'El campo titulo ya existe.',
            'contenido.required' => 'El campo contenido es obligatorio.',
            'titulo.required' =>'El campo de titulo es obligatorio.',
            'imagen.mimes' =>'La imagen solo admite archivos de tipo: jpg, bmp, png o jpeg.',
            'imagen.image' =>'La imagen debe ser un archivo tipo imagen.',
            'imagen.max' =>'La imagen no puede ocupar mas de 2MB.',
        ];
        $this->validate($request, $rules, $messages);

        
        $imagenStore = $request->file('imagen');
        
        //enviar datos
        $recipe = new Recipe();
        $recipe->titulo=$request->titulo;
        $recipe->user_id=auth()->user()->id;
        $recipe->imagen=Str::slug($request->titulo) . "." . $imagenStore->extension();
        $recipe->contenido=$request->contenido;


        if($request->file('imagen')):
            //enviar imagen
            $file=$request->file('imagen');
            $destinationPath='images/recipes/';
            $filename = Str::slug($request->titulo) . "." . $imagenStore->extension();
            $uploadSuccess=$request->file('imagen')->move($destinationPath,$filename);
        endif;

                
        $recipe->save();
        
        
        return redirect(route('mi-cuenta'));
    }    


    /**
     * Para actualizar las recetas individualmente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {

        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $vari= Recipe::findOrFail($id);
        $vari->titulo= ucfirst($request->input('titulo')); //ucfirst devuelve el primer valor en mayuscula
        $vari->contenido= ucfirst($request->input('contenido'));
        $file=$request->file('imagen');

        //enviar imagen
        if($request->file('imagen')):
            //enviar imagen
            $file=$request->file('imagen');
            $destinationPath='images/recipes/';
            $filename = Str::slug($request->titulo) . "." . $file->getClientOriginalExtension();
            $uploadSuccess=$request->file('imagen')->move($destinationPath,$filename);

            $vari->imagen=Str::slug($request->titulo) . "." . $file->getClientOriginalExtension();
        endif;

        $vari->save();

        return redirect(route('mi-cuenta'));

    }


    /**
     * Muestra la vista para editar una receta
     *
     * @return \Illuminate\Http\Response
     */
    public function fakeEdit($id)
    {
        $report = Recipe::findOrFail($id);
        return view('edit', [
            'recipe' => $report,
        ]);

    }


    /**
     * Para mostrar las recetas individualmente
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        if(auth()->user()){
            $favorite =Favorite::where('user_id', '=', auth()->user()->id)
            ->where('recipe_id', '=', $id)
            ->first();//trae solo un objeto del array

            //$favorite = Favorite::get()
            //->where('user_id', '=', auth()->user()->id)
            //->where('recipe_id', '=', $id);

            $recipe = Recipe::findOrFail($id);
            
            return view('recipeslug', [
                'recipe' => $recipe,
                'favorite' => $favorite,
            ]); 
              
        }
        else{
            $recipe = Recipe::findOrFail($id);
            return view('recipeslug', [
                'recipe' => $recipe,
                'favorite' => 'acceso no permitido'
            ]); 
        }

          
    }




        /**
     * Para mostrar las recetas individualmente
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function favorite($id){

        $favorite = new Favorite();
        $favorite->recipe_id=$id;
        $favorite->user_id=auth()->user()->id;
        $favorite->favorite=1;
        $favorite->save();
 
        return redirect(route('recipe.slug', $id));
    }



    public function favoriteDestroy($id)
    {
        $favorite = Favorite::where('user_id', '=', auth()->user()->id)
            ->where('recipe_id', '=', $id)
            ->delete();

        return redirect('/recetas');
    }





    /**
     * Para borrar las recetas individualmente y redireccionar a las recetas
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $recipe =Recipe::findOrFail($id);
        $destinationPath = public_path('/images/recipes/');
        File::delete($destinationPath . $recipe->imagen);
        
        Recipe::findOrFail($id)->delete();

        return redirect(route('mi-cuenta'));
    }




}
