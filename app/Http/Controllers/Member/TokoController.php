<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class TokoController extends Controller
{
        public function index()
        {
            $products = Products::all();
            return view('member.toko', ['products' => $products]);
        }
    }

