<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateDataPemesan extends FormRequest
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
            'nama_pemesan' => 'required|string|max:255',
            'jumlah_pesanan' => 'required|integer',
            'total_harga' => 'required|integer',
            'alamat_pemesan' => 'required',
            'telp' => 'required|regex:/^[0-9]{10,15}$/',
        ];
    }
    public function messages()
    {
        return [
            'nama_pemesan.required' => 'kolom nama pembeli harus diisi.',
            'nama_pemesan.max' => 'nama pembeli tidak boleh lebih dari 255 karakter.',
            'jumlah_pesanan.required' => 'kolom jumlah pesanan harus diisi.',
            'jumlah_pesanan.integer' => 'jumlah pesanan harus berupa angka.',
            'total_harga.required' => 'kolom total harga harus diisi.',
            'total_harga.integer' => 'total harga harus berupa integer.',
            'alamat_pemesan.required' => 'kolom alamat pembeli harus diisi.',
            'telp.required' => 'kolom no telepon harus diisi.',
            'telp.regex' => 'mohon masukan no telepon yang valid.',
        ];
    }
}
