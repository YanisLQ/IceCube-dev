<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $entreprises = DB::table('entreprises')->where('id', $request->entreprises)->first();
        $categories = DB::table('sun_burger_categories')->get();

        return view('dashboard', [
            'logo' => $entreprises->logo,
            'categories' => $categories,
        ]);
    }}
