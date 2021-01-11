<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{
    public function index(){
        return view('admin/food-items/all');
    }

    public function edit(){
        return view('admin/food-items/edit');
    }
    public function create(){
        return view('admin/food-items/create');
    }   
}
