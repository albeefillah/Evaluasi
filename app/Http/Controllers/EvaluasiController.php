<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiWI;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexWI()
    {
        $evalwi = EvaluasiWI::all();

        return view('evaluasi.wi.index', compact('evalwi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createWI()
    {
        $user = User::all();

        return view('evaluasi.wi.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeWI(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function showWI(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editWI(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateWI(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyWI(string $id)
    {
        //
    }
}
