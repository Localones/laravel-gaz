<?php

namespace App\Http\Controllers;

use App\Models\ShopOil;
use Illuminate\Http\Request;

class OilCardController extends Controller
{
    function index(){
        $cards = ShopOil::all();
        return view('users.home', compact('cards'));
    }
}
