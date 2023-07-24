<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
use App\Http\Requests\RequestStoreOrUpdatePendapatan;

class PendapatanController extends Controller
{
    public function index()
    {
        $pendapatans = Pendapatan::latest()->paginate(5);
        return view('dashboard.pendapatan.index', compact('pendapatans'));
    }

    public function create()
    {
        return view('dashboard.pendapatan.create');
    }

    public function store(RequestStoreOrUpdatePendapatan $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];
        $pendapatan = Pendapatan::create($validated);

        return redirect(route('pendapatan.index'))->with('success', 'data berhasil dibuat');
    }

    public function show($id)
    {
        return Pendapatan::findOrFail($id);
    }

    public function edit($id)
    {
        $pendapatan = Pendapatan::findOrFail($id);

        return view('dashboard.pendapatan.edit', compact('pendapatan'));
    }

    public function update(RequestStoreOrUpdatePendapatan $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->update($validated);

        return redirect(route('pendapatan.index'))->with('success', 'Data berhasil diubah');
    }

    function destroy($id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->delete();

        return redirect(route('pendapatan.index'))->with('success', 'Data berhasil dihapus');
    }
}
