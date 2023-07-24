<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportPenjualan;
use App\Http\Requests\RequestStoreOrUpdateReport;

class ReportPenjualanController extends Controller
{
    public function index()
    {
        $reports = ReportPenjualan::latest()->paginate(5);
        return view('dashboard.report-penjualan.index', compact('reports'));
    }

    public function create()
    {
        return view('dashboard.report-penjualan.create');
    }

    public function store(RequestStoreOrUpdateReport $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];
        $report = ReportPenjualan::create($validated);
        return redirect()->route('report-penjualan.index')->with('success', 'Data berhasil dibuat');
    }

    public function show($id)
    {
        return ReportPenjualan::findOrFail($id);
    }

    public function edit($id)
    {
        $report = ReportPenjualan::findOrFail($id);
        return view('dashboard.report-penjualan.edit', compact('report'));
    }

    public function update(RequestStoreOrUpdateReport $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];
        $report = ReportPenjualan::findOrFail($id);
        $report->update($validated);

        return redirect(route('report-penjualan.index'))->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $report = ReportPenjualan::findOrFail($id);
        $report->delete();
        return redirect(route('report-penjualan.index'))->with('success', 'Data berhasil dihapus');
    }
}
