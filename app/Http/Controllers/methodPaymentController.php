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

        $namabank = 'ga masuk bro';

        if($data['bank']=='BCA'){
            $namabank = 'Bank Central Asia';
        }else if($data['bank']=='BNI'){
            $namabank = 'Bank Negara Indonesia';
        }else if($data['bank']=='BSI'){
            $namabank = 'Bank Syariah Indonesia';
        }else if($data['bank']=='BRI'){
            $namabank = 'Bank Rakyat Indonesia';
        }else if($data['bank']=='MANDIRI'){
            $namabank = 'Bank Mandiri';
        }else if($data['bank']=='BTN'){
            $namabank = 'Bank Tabungan Negara';
        }else if($data['bank']=='MEGA'){
            $namabank = 'Bank Mega';
        }else if($data['bank']=='DANAMON'){
            $namabank = 'Danamon';
        } else{
            $namabank = '-';
        }

        $bank_method = payment_method::first();

        echo $namabank;
        if($bank_method){
            $bank_method->update([
                'bank' => $data['bank'],
                'rekening' => $data['rekening'],
                'qris' => $bank_method->qris,
                'atas_nama' => $data['atas_nama'],
                'bank_name' => $namabank,
            ]);
        }else{
            payment_method::create([
                'bank' => $data['bank'],
                'rekening' => $data['rekening'],
                'qris' => '',
                'atas_nama' =>$data['atas_nama'],
                'bank_name' => $namabank,
            ]);
        }

        return redirect()->route('payment.index')->with('success', 'Metode Infaq telah diupdate');
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
                'bank_name' => $bank_method->bank_name,
            ]);
        }else{
            payment_method::create([
                'bank' => '',
                'rekening' => '',
                'qris' => $filePath,
                'atas_nama' =>'',
                'bank_name' => $bank_method->bank_name,
            ]);
        }

        return redirect()->route('payment.index')->with('success', 'Metode Infaq telah diupdate');
    }
}