<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'kecacatan' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',
        ]);

        Item::create($validatedData);

        return redirect()->route('item.index')->with('success', 'Item berhasil dimasukkan');
    }

    public function show($id)
    {
        $items = Item::find($id);

        if (!$items) {
            return redirect()->route('item.index')->with('error', 'Item tidak ditemukan');
        }

        return view('item.show', compact('items'));
    }

    public function edit($id)
    {
        $items = Item::find($id);

        if (!$items) {
           return redirect()->route('item.index')->with('error', 'Item tidak ditemukan');
        }

        return view('item.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jenis' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'kecacatan' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',
        ]);

        $items = Item::find($id);

        if (!$items) {
            return redirect()->route('item.index')->with('error', 'Item tidak ditemukan');
        }

        $items->update($validatedData);

        return redirect()->route('item.show', $items->id)->with('success', 'Item berhasil diperbarui');
    }

    public function destroy($id)
    {
        $items = Item::find($id);

        if (!$items) {
            return redirect()->route('item.index')->with('error', 'Item tidak ditemukan');
        }

        $items->delete();

        return redirect()->route('item.index')->with('success', 'Item berhasil dihapus');
    }



}
