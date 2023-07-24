<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersediaanBarang;
use App\Http\Requests\RequestStoreOrUpdateBarang;

class PersediaanBarangController extends Controller
{
    public function index()
    {
        $barangs = PersediaanBarang::latest()->paginate(5);
        return view('dashboard.persediaan-barang.index', compact('barangs'));
    }

    public function create()
     {
        return view('dashboard.persediaan-barang.create');
     }

     public function store(RequestStoreOrUpdateBarang $request)
     {
        $validated = $request->validated() + [
            'created_at'=> now(),
        ];
        $barang = PersediaanBarang::create($validated);
        return redirect(route('persediaan-barang.index'))->with('success', 'Data berhasil dibuat');
     }

     public function show($id)
     {
        return PersediaanBarang::findOrFail($id);
     }

     public function edit($id)
     {
        $barang = PersediaanBarang::findOrFail($id);
        return view('dashboard.persediaan-barang.edit', compact('barang'));
     }

     public function update(RequestStoreOrUpdateBarang $request, $id)
     {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];
        $barang = PersediaanBarang::findOrFail($id);
        $barang->update($validated);

        return redirect(route('persediaan-barang.index'))->with('success', 'Data berhasil diubah');
     }

     public function destroy($id)
     {
        $barang = PersediaanBarang::findOrFail($id);
        $barang->delete();

        return redirect(route('persediaan-barang.index'))->with('success', 'Data berhasil dihapus');
     }
}
