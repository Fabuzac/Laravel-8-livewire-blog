<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('items', [
            'items' => Item::latest()->paginate(9)
        ]);
    }

    public function show(Item $item)
    {
        return view('item', [
            'item' => $item,
        ]);
    }
}
