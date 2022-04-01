<?php

namespace App\Http\Controllers;

use App\Models\ApplicationZ;
use App\Models\ShopOil;
use Illuminate\Http\Request;

class ApplicationZController extends Controller
{
    function index(){
        $cards = ShopOil::all();
        return view('users.home', compact('cards'));
    }

    function store(Request $request){
        $request->validate([
            'title' => 'required',
            'phone'
        ]);

        ApplicationZ::query()->create($request->all());

        return redirect()->route('home-page')->with('success', 'Заявка отправлена');
    }
}
