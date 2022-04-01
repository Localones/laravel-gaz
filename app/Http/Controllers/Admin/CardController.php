<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShopOil;
use Illuminate\Http\Request;

class CardController extends Controller
{
    function index(){
        $cards = ShopOil::query()->paginate(1);
        return view('admin.card.card', compact('cards'));
    }

    function create(){
        return view('admin.card.add');
    }

    function store(Request $request){
        $request->validate([
            'title' => 'required',
            'cube' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'trk' => 'required',
            'valve' => 'required',
            'system' => 'required',
        ]);

        ShopOil::query()->create($request->all());

        return redirect()->route('card.index')->with('success', 'Карточка добавлена');
    }

    function edit($id){
        $card = ShopOil::query()->find($id);
        return view('admin.card.edit', compact('card'));
    }

    function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'cube' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'trk' => 'required',
            'valve' => 'required',
            'system' => 'required',
        ]);

        ShopOil::query()->find($id)->update($request->all());

        return redirect()->route('card.index')->with('success', 'Запись обновлена');
    }

    function destroy($id){
        ShopOil::destroy($id);
        return redirect()->route('card.index')->with('success', 'Запись удалена');
    }
}
