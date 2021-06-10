<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{

    public function index()
    {
        return view('app.daftarsurat');
    }

    public function createPemohon()
    {
        return view('sipes.suratKetUmPemohon');
    }

    public function createPemohonU()
    {
        return view('sipes.suratKetUshPemohon');
    }

    public function storePemohonU(Request $request)
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

        // dd($request);

        return redirect('/')->with('ajukanSKU', 'Surat');

    }

    public function storePemohon(Request $request)
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
            'file_syarat' => $fileName,
        ]);

        // dd($request);

        return redirect('/')->with('ajukanSKUH', 'Surat');

    }

    public function show($id)
    {
        //
    }

}
