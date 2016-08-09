<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Products;
use App\Subcategories;
use App\OrderItems;
use DB;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Products::All();
        $newProducts = Products::latest()->take(5)->get();
        $top = OrderItems::with('products')->select('products_id', DB::raw('COUNT(products_id) as count'))
        ->groupBy('products_id')->orderBy('count', 'desc')->take(5)->get();

        return view('store.index', compact('products','newProducts','top','products'));
    }

    public function show($id){
      $product = Products::findOrFail($id);
      return view('store.single', compact('product'));
    }
    public function categoryProducts($id){
      $subcategories = Subcategories::find($id)->products()->get();
      return view('store.products', compact('subcategories'));
    }

    public function special($by){

    $subcategories = Subcategories::with('products')->whereHas('products', function($query) use ($by){
        $query->where('place',$by);
      })->get();

      return view('store.products', compact('subcategories'));
    }
}
