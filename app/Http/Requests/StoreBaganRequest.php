<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBaganRequest extends FormRequest
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
            'bagan_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'bagan_title' => 'required|string|max:255',
            'bagan_description' => 'required|string|max:1000',
        ];
    }
    /**
     *  pesan kustom untuk error validasi
     *
     * @return array
     */ public function messages()
    {
        return [
            'bagan_photo.required' => 'Nama foto bagan wajib diisi.',
            'bagan_photo.image' => 'File yang diunggah harus berupa gambar.',
            'bagan_photo.mimes' => 'File gambar harus bertipe JPG, JPEG, atau PNG.',
            'bagan_photo.max' => 'Ukuran file gambar maksimal 2MB.',
            'bagan_title.required' => 'Judul bagan wajib diisi.',
            'bagan_description.required' => 'Deskripsi bagan wajib diisi.',
        ];
    }
}
