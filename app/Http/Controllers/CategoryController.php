<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $allCate = Category::all();

        return view('admin.cate.list')->with(['allCate'=>$allCate]);
    }
}
