<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPemesan;
use App\Http\Requests\RequestStoreOrUpdateDataPemesan;

class DataPemesanController extends Controller
{
    public function index()
    {
        $pesanans = DataPemesan::latest()->paginate(5);
        return view('dashboard.data-pemesan.index', compact('pesanans'));
    }

    public function create()
    {
        return view('dashboard.data-pemesan.create');
    }

    public function store(RequestStoreOrUpdateDataPemesan $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];
        $pesanan = DataPemesan::create($validated);

        return redirect(route('data-pemesan.index'))->with('success', 'Data berhasil dibuat');
    }

    public function show($id)
    {
        return DataPemesan::findOrFail($id);
    }

    public function edit($id)
    {
        $pesanan = DataPemesan::findOrFail($id);
        return view('dashboard.data-pemesan.edit', compact('pesanan'));
    }

    public function update(RequestStoreOrUpdateDataPemesan $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];
        $pesanan = DataPemesan::findOrFail($id);
        $pesanan->update($validated);

        return redirect(route('data-pemesan.index'))->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $pesanan = DataPemesan::findOrFail($id);
        $pesanan->delete();

        return redirect(route('data-pemesan.index'))->with('success', 'Data berhasil dihapus');
    }
}
