<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        $items = [
            ['id' => 1, 'nama' => 'Spidol Merah', 'stok' => 50],
            ['id' => 2, 'nama' => 'Tinta Biru', 'stok' => 30],
            ['id' => 3, 'nama' => 'Kertas A4', 'stok' => 100],
        ];

        return view('list_item', ['items' => $items]);
    }
}
