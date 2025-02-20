<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateActivitiesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'activityName' => 'required|string|max:255',
            'activityPhoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activityDescription' => 'required|string|max:255',
            'activityPerformers' => 'required|string|max:255',
            'activityDate' => 'required|date',
            'activityTime' => 'required|string|max:255',
            'activityTime2' => 'required|string|max:255',
            'activityPlace' => 'required|string|max:255',
        ];
    }

    /**
     * Pesan kustom untuk error validasi
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'activityName.required' => 'Nama kegiatan wajib diisi.',
            'activityDescription.required' => 'Deskripsi kegiatan wajib diisi.',
            'activityPerformers.required' => 'Pelaksana kegiatan wajib diisi.',
            'activityDate.required' => 'Tanggal kegiatan wajib diisi.',
            'activityTime.required' => 'Waktu kegiatan wajib diisi.',
            'activityTime2.required' => 'Waktu kegiatan (akhir) wajib diisi.',
            'activityPlace.required' => 'Tempat kegiatan wajib diisi.',

            'activityPhoto.image' => 'Foto harus berupa file gambar.',
            'activityPhoto.mimes' => 'Foto harus dalam format jpeg, png, jpg, atau gif.',
            'activityPhoto.max' => 'Ukuran foto tidak boleh lebih dari 2MB.',
        ];
    }
}
