<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CetakController extends Controller
{
    public function index(Request $request, Surat $surat)
    {
        // $pdf = PDF::loadView('cetakSurat.cetak_surat2', compact('surat'))->setPaper('f4', 'potrait');
        // return $pdf->download($surat->nama."-".".pdf");

        // dd($surat);
        // if ($surat->jenis_surat == 'surat keterangan umum')
        // {
        //     $pdf = PDF::loadView('cetakSurat.cetak_surat1', compact('surat'))->setPaper(array(0, -2, 450.28, 720.89), 'portrait');
        //     return $pdf->stream();
        //     // return $tes = $pdf->download($surat->nama."-".".pdf");
        //     // Storage::put('public/surat_selesai/'.$surat->nama, $tes);
        // }
        if ($surat->keterangan == 'sk.penghasilan')
        {
            $pdf = PDF::loadView('cetakSurat.cetak_surat1-1', compact('surat'))->setPaper(array(0, -2, 450.28, 720.89), 'potrait');
            return $pdf->stream();
            // return $tes = $pdf->download($surat->nama."-".".pdf");
            // Storage::put('public/surat_selesai/'.$surat->nama, $tes);
        }elseif ($surat->keterangan == 'sk.miskin')
        {
            $pdf = PDF::loadView('cetakSurat.cetak_surat1-2', compact('surat'))->setPaper(array(0, -2, 450.28, 720.89), 'potrait');
            return $pdf->stream();
            // return $tes = $pdf->download($surat->nama."-".".pdf");
            // Storage::put('public/surat_selesai/'.$surat->nama, $tes);
        }elseif ($surat->keterangan == 'sk.kp/kkn')
        {
            $pdf = PDF::loadView('cetakSurat.cetak_surat1-3', compact('surat'))->setPaper(array(0, -2, 450.28, 720.89), 'potrait');
            return $pdf->stream();
            // return $tes = $pdf->download($surat->nama."-".".pdf");
            // Storage::put('public/surat_selesai/'.$surat->nama, $tes);
        }else
        {
            $pdf = PDF::loadView('cetakSurat.surat_forreal', compact('surat'))->setPaper(array(0, -2, 450.28, 720.89), 'potrait');
            return $pdf->stream();
            // return $tes = $pdf->download($surat->nama."-".".pdf");
            // Storage::put('public/surat_selesai/'.$surat->nama, $tes);
        }

        //return view('cetakSurat.cetak_surat2', compact('surat'));
    }


}
