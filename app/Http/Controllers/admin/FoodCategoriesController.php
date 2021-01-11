<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodCategoriesController extends Controller
{
    public function index(){
        return view('admin/food-categories/all');
    }

    public function edit(){
        return view('admin/food-categories/edit');
    }
    public function create(){
        return view('admin/food-categories/create');
    }   
   
   
    //
}

