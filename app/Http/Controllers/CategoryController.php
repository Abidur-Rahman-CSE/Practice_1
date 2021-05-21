<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    //
    function Category_list(){
        // $categories = Category:: all()
        $data= Category::all();

        return view('backend.category.Category-list', compact('data'));
    }

    function Category_delete($id){
        // $categories = Category:: all()
        $data= Category::findOrFail($id);
        $data -> delete();

        return back();
    }


    function Category_post(Request $req){
        $data = new Category;
        $data->category_name = $req->category_name;
        $data->save();
        return back()->with('CategoryAdd','Category added successfully');

    //    Category:: insert([
    //        'category_name' => $req->category_name,
    //        'created_at'=> Carbon::now()
    //    ]);
    }
}
