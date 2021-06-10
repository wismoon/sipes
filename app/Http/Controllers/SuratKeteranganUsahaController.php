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
            // 'tanggal' => '',
            // 'nomorsurat' => '',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'namausaha' => 'required',
            'alamatusaha' => 'required',
            'file_syarat' => 'required:mimes:pdf',

        ]);

        //dd($request->file_syarat);

        $fileName = $request->file_syarat->getClientOriginalName().'-'.time().'.'.$request->file_syarat->extension();

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
            'nohp' => $request->nohp,
            'namausaha' => $request->namausaha,
            'alamatusaha' => $request->alamatusaha,
            'file_syarat' => $fileName,
        ]);

        //dd($request);

        if (auth()->user() != null)
        {
            return redirect('surat/daftarsurat')->with('tambahSKUH', 'Surat Usaha');
        }else
        {
            return redirect()->route('homeland');
        }
        //return view('app.daftarsurat');
    }

}
