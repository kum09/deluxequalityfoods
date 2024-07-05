<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home(){
        return view('frontend.home');
    }
    public function Products(){
        return view('frontend.product');
    }
}
