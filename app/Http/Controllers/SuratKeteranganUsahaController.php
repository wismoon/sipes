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
            'keterangan' => 'required',
            'jenis_surat' => 'required',
            'file_syarat' => 'required|mimetypes:application/pdf|max:10000',

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
            'nohp' => $request->nohp,
            'namausaha' => $request->namausaha,
            'alamatusaha' => $request->alamatusaha,
            'keterangan' => $request->keterangan,
            'jenis_surat' => $request->jenis_surat,
            'file_syarat' => $fileName,
        ]);

        // dd($request);


        return redirect('surat/daftarsurat')->with('tambahSKUH', 'Surat Usaha');

        //return view('app.daftarsurat');
    }

}
