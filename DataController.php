<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataItem;

class DataController extends Controller
{
    public function index()
    {
        $jumlah = DataItem::countTotal();
        return view('data', ['items' => DataItem::$items, 'jumlah' => $jumlah]);
    }

    public function store(Request $request)
    {
        DataItem::add($request->input('item'));
        return redirect()->route('data.index');
    }
}
