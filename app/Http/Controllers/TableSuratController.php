<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class TableSuratController extends Controller
{
    public function index()
    {
        $pemohon = Surat::where('status', 'diproses')->get();
        return view('app.table', compact('pemohon'));
    }

    public function show()
    {
        $pemohon = Surat::where('status', 'diproses')->get();

        if ($pemohon == null)
        {
            abort(404);
        }
    }

    public function showArsip()
    {
        $pemohon = Surat::where('status', 'selesai')->get();

        return view('app.tableArsip', compact('pemohon'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            // 'tanggal' => '',
            'nomorsurat' => '',
            'nama' => '',
            'tempatlahir' => '',
            'tanggallahir' => '',
            'jeniskelamin' => '',
            'agama' => '',
            'pekerjaan' => '',
            'alamat' => '',
            //'keterangan' => 'Surat Keterangan',
            //'file_syarat' => 'required:mimes:pdf',
        ]);

        Surat::find($id)->update([
            // 'tanggal' => $request->tanggal,
            'nomorsurat' => $request->nomorsurat,
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'status' => $request->status,
            // 'keterangan' => $request->keterangan,
            // 'file_syarat' => $fileName,
        ]);


        if($request->status == 'selesai')
        {
            return redirect('arsip');
        }else
        {
            return redirect('table');
        }
    }

    public function destroy($id)
    {
        Surat::find($id)->delete();

        return redirect('table')->with('sukses', 'Data berhasil dihapus!');
    }
}
