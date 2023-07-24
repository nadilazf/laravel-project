<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Http\Requests\RequestStoreOrUpdatePengeluaran;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluarans = Pengeluaran::latest()->paginate(5);
        return view('dashboard.pengeluaran.index', compact('pengeluarans'));
    }

    public function create()
    {
        return view('dashboard.pengeluaran.create');
    }

    public function store(RequestStoreOrUpdatePengeluaran $request)
    {
        $validated = $request->validated() + [
            'created_at'=> now(),
        ];
        $pengeluaran = Pengeluaran::create($validated);
        return redirect(route('pengeluaran.index'))->with('success', 'Data berhasil dibuat');
    }

    public function show($id)
    {
        return Pengeluaran::findOrFail($id);
    }

    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('dashboard.pengeluaran.edit', compact('pengeluaran'));
    }

    public function update(RequestStoreOrUpdatePengeluaran $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->update($validated);

        return redirect(route('pengeluaran.index'))->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();

        return redirect(route('pengeluaran.index'))->with('success', 'Data berhasil dihapus');
    }

}
