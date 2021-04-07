<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodCategory;
use App\Role; 
use App\User; 

class FoodCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function edit(){
    //     return view('admin/food-categories/edit');
    // }
    // public function create(){
    //     return view('admin/food-categories/create');
    // }   

    public function index(){
        $categories = FoodCategory::paginate(10); 
        return view('admin/food-categories/all', [
            'categories' => $categories]);
    }

    public function edit($id){
              
        $category = FoodCategory::find($id);  // go into database and find the FoodCategory pivoting off of id
     
        return view('admin/food-categories/edit', [
            'category' => $category
        ]);
    }
    public function create(){
   
        return view('admin/food-categories/create');
    } 
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', ],
            'image_url' => ['required', 'string']
        ]);   
        // return request()->all();
        $category = new FoodCategory();
        $category->title = request('title'); 
        $category->description = request('description'); 
        $category->image_url = request('image_url');
        $category->save(); 

        return redirect('/admin/food-categories');
    
    }   
    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', ],
            'image_url' => ['required', 'string']
        ]);     

         // return request()->all();
         $category = FoodCategory::find($id);
         $category->title = request('title'); 
         $category->description = request('description'); 
         $category->image_url = request('image_url');
         $category->save(); 
 
         return redirect('/admin/food-categories');
       
        // $user = FoodCategory::find($id);  // go into database and find the FoodCategory pivoting off of id
        // $roles = Role::All();
        // return view('admin/food-categories/edit', [
        //     'user' => $user, 
        //     'roles' => $roles
        // ]);
    }

    public function delete($id){
        $category = FoodCategory::find($id); 
        $category->delete(); 
        return redirect('/admin/food-categories');
    }
    //
}

