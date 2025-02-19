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
            'activityDate' => 'required|date',
            'activityTime' => 'required|string|max:255',
        ];
    }
     /**
     *  pesan kustom untuk error validasi
     *
     * @return array
     */ public function messages()
     {
        return [
            'activityName' => 'Nama kegiatan wajib diisi.',
            // 'activityPhoto' => 'Photo kegiatan wajib diisi.',
            'activityDescription' => 'Deskripsi kegiatan wajib diisi.',
            'activityDate' => 'Tanggal kegiatan wajib diisi.',
            'activityTime' => 'Waku kegiatan wajib diisi.',
        ];
    }
}