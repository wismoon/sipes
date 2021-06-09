<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class SuratKeteranganController extends Controller
{

    public function index()
    {
        return view('sipes.suratKeterangan');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'tanggal' => 'required',
            'nomorsurat' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'jenis_surat' => 'required',
            'keterangan' => 'required',
            'file_syarat' => 'required:mimes:pdf',

        ]);

        //dd($request->file_syarat);

        $fileName = $request->file_syarat->getClientOriginalName().'-'.time().'.'.$request->file_syarat->extension();
        $request->file_syarat->move(public_path('data'), $fileName);

        Surat::create([
            'tanggal' => date('Y-m-d H:i:s'),
            'nomorsurat' => $request->nomorsurat,
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'jenis_surat' => $request->jenis_surat,
            'keterangan' => $request->keterangan,
            'file_syarat' => $fileName,
        ]);

        //dd($request);

        if (auth()->user() != null)
        {
            return view('app.daftarsurat');
        }else
        {
            return redirect()->route('homeland');
        }
    }

    // public function cetak(Request $request, Surat $surat)
    // {
    //     $pdf = PDF::loadView('cetakSurat.cetak_surat1', compact('surat'))->setPaper('f4', 'potrait');
    //     return $pdf->download($surat->nama."-".".pdf");
    // }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
