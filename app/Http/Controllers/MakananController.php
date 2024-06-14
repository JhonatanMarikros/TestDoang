<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        $title = "Makanan";
        return view('admin.makanan.index', compact('makanans', 'title'));
    }

    public function create()
    {
        $categories = ['Maincourse', 'Pasta', 'Bowl Series', 'French Fries Series', 'Finger Food', 'Sweet'];
        $title = "Makanan";
        return view('admin.makanan.create', compact('categories', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'required|in:Maincourse,Pasta,Bowl Series,French Fries Series,Finger Food,Sweet'
        ]);

        $path = $request->file('gambar')->store('public/images');

        Makanan::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('adminmakanan.index')->with('success', 'Makanan created successfully.');
    }

    public function show($id)
    {
        $makanan = Makanan::findOrFail($id);
        $title = "Makanan";
        return view('admin.makanan.show', compact('makanan', 'title'));
    }

    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        $title = "Makanan";
        $categories = ['Maincourse', 'Pasta', 'Bowl Series', 'French Fries Series', 'Finger Food', 'Sweet'];
        return view('admin.makanan.edit', compact('makanan', 'categories', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'image|max:2048',
            'kategori' => 'required|in:Maincourse,Pasta,Bowl Series,French Fries Series,Finger Food,Sweet'
        ]);

        $makanan = Makanan::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::delete($makanan->gambar);
            $path = $request->file('gambar')->store('public/images');
        } else {
            $path = $makanan->gambar;
        }

        $makanan->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('adminmakanan.index')->with('success', 'Makanan updated successfully.');
    }

    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id);

        Log::info('Attempting to delete Makanan with ID: ' . $makanan->id);
        
        if ($makanan->gambar) {
            Log::info('Image path: ' . $makanan->gambar);
            Storage::delete($makanan->gambar);
        } else {
            Log::info('No image to delete');
        }
        
        $makanan->delete();
        Log::info('Makanan deleted successfully with ID: ' . $makanan->id);
        
        return redirect()->route('adminmakanan.index')->with('success', 'Makanan deleted successfully.');
    }

    public function showMenu()
    {
        $makanans = Makanan::all()->groupBy('kategori'); // Mengelompokkan data makanan berdasarkan kategori
        return view('main.menu', compact('makanans')); // Mengirim data ke view
    }
}