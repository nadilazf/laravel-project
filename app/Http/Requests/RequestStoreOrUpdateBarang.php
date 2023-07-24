<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateBarang extends FormRequest
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
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jenis_barang' => 'required|string|max:255',
            'harga_barang' => 'required|integer',
            'quantity' => 'required|integer',
            'tujuan_barang' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'kode_barang.required' => 'kolom kode barang harus diisi.',
            'kode_barang.integer' => 'kode barang harus berupa angka.',
            'nama_barang.required' => 'kolom nama barang harus diisi.',
            'nama_barang.max' => 'nama barang tidak boleh lebih dari 255 karakter.',
            'jenis_barang.required' => 'kolom jenis barang harus diisi.',
            'jenis_barang.max' => 'jenis barang tidak boleh lebih dari 255 karakter.',
            'harga_barang.required' => 'kolom harga barang harus diisi.',
            'harga_barang.integer' => 'harga barang harus berupa angka.',
            'quantity.required' => 'kolom quantity harus diisi.',
            'quantity.integer' => 'quantity harus berupa angka.',
            'tujuan_barang.required' => 'kolom tujuan barang harus diisi.',
            'tujuan_barang.max' => 'tujuan barang tidak boleh lebih dari 255 karakter.',
        ];
    }
}
