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
            'nomorsurat' => 'required',
            // 'nama' => '',
            // 'tempatlahir' => '',
            // 'tanggallahir' => '',
            // 'jeniskelamin' => '',
            // 'agama' => '',
            // 'pekerjaan' => '',
            // 'alamat' => '',
            // 'nohp' => '',
            // 'namausaha' => '',
            // 'alamatusaha' => '',
            // 'keterangan' => '',
            // 'jenis_surat' => '',
            'status' => 'required',
            // 'file_syarat' => 'required:mimes:pdf',
        ]);

        // $fileName = $request->file_syarat->getClientOriginalName().'-'.time().'.'.$request->file_syarat->extension();
        // $request->file_syarat->move(public_path('data'), $fileName);

        Surat::find($id)->update([
            'tanggal' => date('Y-m-d H:i:s'),
            'nomorsurat' => $request->nomorsurat,
            // 'nama' => $request->nama,
            // 'tempatlahir' => $request->tempatlahir,
            // 'tanggallahir' => $request->tanggallahir,
            // 'jeniskelamin' => $request->jeniskelamin,
            // 'agama' => $request->agama,
            // 'pekerjaan' => $request->pekerjaan,
            // 'alamat' => $request->alamat,
            // 'nohp' => $request->nohp,
            // 'namausaha' => $request->namausaha,
            // 'alamatusaha' => $request->alamatusaha,
            'status' => $request->status,
            // 'keterangan' => $request->keterangan,
            // 'file_syarat' => $fileName,
        ]);


        if($request->status == 'selesai')
        {
            return redirect('arsip')->with('sukses', 'Berhasil Dong');
        }else
        {
            return redirect('table')->with('sukses', 'Berhasil Dong');
        }
    }

    public function destroy($id)
    {
        Surat::find($id)->delete();

        return redirect('table')->with('suksesDelete', 'Berhasil Delet');
    }
}
