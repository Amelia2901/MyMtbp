<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\payment_method;

class methodPaymentController extends Controller
{
    //
    public function index(){
        $data = payment_method::first();
        return view('infaq.payment_method', compact('data'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'bank' => 'required',
            'rekening' => 'required',
            'atas_nama' =>'required',
        ]);

        $bank_method = payment_method::first();

        if($bank_method){
            $bank_method->update([
                'bank' => $data['bank'],
                'rekening' => $data['rekening'],
                'qris' => $bank_method->qris,
                'atas_nama' => $data['atas_nama'],
            ]);
        }else{
            payment_method::create([
                'bank' => $data['bank'],
                'rekening' => $data['rekening'],
                'qris' => '',
                'atas_nama' =>$data['atas_nama'],
            ]);
        }

        return redirect()->route('payment.index')->with('success', 'Metode Infaq telah diperbarui');
    }

    public function storeqris(Request $request){
        if ($request->hasFile('qris')) {
            $filePath = $request->file('qris')->store('uploads/qris_infaq', 'public');
        }
        $bank_method = payment_method::first();

        if($bank_method){
            $bank_method->update([
                'bank' => $bank_method->bank,
                'rekening' => $bank_method->rekening,
                'qris' => $filePath ?? $bank_method->qris,
                'atas_nama' => $bank_method->atas_nama,
            ]);
        }else{
            payment_method::create([
                'bank' => '',
                'rekening' => '',
                'qris' => $filePath,
                'atas_nama' =>'',
            ]);
        }

        return redirect()->route('payment.index')->with('success', 'Metode Infaq telah diperbarui');
    }
}