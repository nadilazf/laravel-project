<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdatePengeluaran extends FormRequest
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
            'pengeluaran' => 'required|integer|min:1',
        ];
    }
    public function messages()
    {
        return [
            'bulan.required' => 'kolom bulan harus diisi.',
            'bulan.date' => 'bulan harus berupa waktu.',
            'pengeluaran.required' => 'kolom pendapatan harus diisi.',
            'pengeluaran.integer' => 'pendapatan harus berupa angka.',
        ];
    }
}
