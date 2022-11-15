<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function show(Request $request)
{
        $sous_categories = DB::table('produits_sun')->where('categorie', $request->product_id)->get();
      return view("products.index", [
        'sous_categories' => $sous_categories,
    ]);
}
}
