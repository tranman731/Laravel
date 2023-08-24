<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function categorydetail($id){
        $category = Category::find($id);
        return view('frontend.categorydetail' ,compact('category'));
    }
    public function productdetail($id){
        $product = Product::find($id);
        return view('frontend.productdetail' ,compact('product'));
    }
}
