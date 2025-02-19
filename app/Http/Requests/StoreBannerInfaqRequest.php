<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerInfaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'banner_photo' => 'image|mimes:jpg,jpeg,png|max:2048',
            'banner_title' => 'required|string|max:255',
            'banner_description' => 'required|string|max:1000',
        ];
    }
    /**
     *  pesan kustom untuk error validasi
     *
     * @return array
     */ public function messages()
    {
        return [
            'banner_photo.image' => 'File yang diunggah harus berupa gambar.',
            'banner_photo.mimes' => 'File gambar harus bertipe JPG, JPEG, atau PNG.',
            'banner_photo.max' => 'Ukuran file gambar maksimal 2MB.',
            'banner_title.required' => 'Judul banner wajib diisi.',
            'banner_description.required' => 'Deskripsi banner wajib diisi.',
        ];
    }
}