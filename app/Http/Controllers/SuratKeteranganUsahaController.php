<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratKeteranganUsahaController extends Controller
{
    public function index()
    {
        return view('sipes.suratUsaha');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => '',
            'nomorsurat' => '',
            'nama' => '',
            'tempatlahir' => '',
            'tanggallahir' => '',
            'jeniskelamin' => '',
            'agama' => '',
            'pekerjaan' => '',
            'alamat' => '',
            'namausaha' => '',
            'alamatusaha' => '',
            'file_syarat' => 'required:mimes:pdf',

        ]);

        //dd($request->file_syarat);

        $fileName = $request->file_syarat->getClientOriginalName().'-'.time().'.'.$request->file_syarat->extension();

        Surat::create([
            'tanggal' => $request->tanggal,
            'nomorsurat' => $request->nomorsurat,
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'namausaha' => $request->namausaha,
            'alamatusaha' => $request->alamatusaha,
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
        //return view('app.daftarsurat');
    }

}
