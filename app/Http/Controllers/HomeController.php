<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     return view('Home');
    // }

    public function adminHome()
    {

        $selesai = Surat::where('status', 'selesai')->count();
        $diproses = Surat::where('status', 'diproses')->count();
        return view('adminHome', compact('selesai', 'diproses'));
    }


}
