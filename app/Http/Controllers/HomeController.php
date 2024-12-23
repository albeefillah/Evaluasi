<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiWI;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $evalWi = EvaluasiWI::where('ket_pengajar','WI PPSDMA')->get();

        return view('home', compact('evalWi'));
    }
}
