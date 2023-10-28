<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Recipe;
use App\Models\User;


class FavoriteController extends Controller
{


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
        Recipe::findOrFail($id)->delete();

        return redirect(route('mi-cuenta'));
    }




}
