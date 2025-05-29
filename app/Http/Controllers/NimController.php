<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nim;

class NimController extends Controller
{
    public function index()
    {
        $nims = Nim::all();

        $ganjil = $nims->filter(function($item) {
            return $item->nim % 2 != 0;
        });

        $genap = $nims->filter(function($item) {
            return $item->nim % 2 == 0;
        });

        return view('nims.index', compact('ganjil', 'genap'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:nims,nim|numeric',
        ]);

        Nim::create([
            'nim' => $request->nim,
        ]);

        return redirect()->back()->with('success', 'Data NIM berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $nim = Nim::findOrFail($id);
        $nim->delete();

        return redirect()->back()->with('success', 'Data NIM berhasil dihapus!');
    }
}