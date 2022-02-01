<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'about' => 'required',
            'cagar_budaya' => 'required|max:255',
            'makanan_khas' => 'required|max:255',
            'tarian_khas' => 'required|max:255',
            'tanggal_keberangkatan' => 'required|date',
            'durasi_wisata' => 'required|max:255',
            'tipe_trip' => 'required|max:255',
            'harga' => 'required|integer'

        ];
    }
}
