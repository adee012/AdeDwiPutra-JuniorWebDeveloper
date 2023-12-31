<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class AnggotaCoontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();

        return view('anggota.anggota', compact('anggota'));
    }

    public function cetak()
    {
        $anggota = Anggota::limit(10)->get();

        $pdf = Pdf::loadView('anggota.cetak-anggota', compact('anggota'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('data-anggota.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
