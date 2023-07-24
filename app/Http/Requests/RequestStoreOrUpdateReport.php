<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateReport extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'bulan' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'harga_barang' => 'required|integer',
            'total_profit' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'bulan.required' => 'kolom bulan harus diisi.',
            'bulan.date' => 'bulan harus berupa waktu.',
            'nama_barang.required' => 'kolom nama barang harus diisi.',
            'nama_barang.max' => 'nama barang tidak boleh lebih dari 255 karakter.',
            'quantity.required' => 'kolom quantity harus diisi.',
            'quantity.integer' => 'quantity harus berupa angka.',
            'harga_barang.required' => 'kolom harga barang harus diisi.',
            'harga_barang.integer' => 'harga barang harus berupa angka.',
            'total_profit.required' => 'kolom total profit harus diisi.',
            'total_profit.integer' => 'total profit harus berupa angka.',
        ];
    }
}
