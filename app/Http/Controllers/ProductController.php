<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        return view("home");
    }

    public function view(Request $request) {
        return view("product");
    }
}