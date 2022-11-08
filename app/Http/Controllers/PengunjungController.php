<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Models\Promo;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengunjung/berandapengunjung');
    }

    public function jenispaket()
    {
        $data = Promo::all();
        return view('pengunjung/jenispaketpengunjung', ['data' => $data]);
    }

    public function galeri()
    {
        return view('pengunjung/galeripengunjung');
    }

    public function artikel()
    {
        return view('pengunjung/artikelpengunjung');
    }

    public function beranda()
    {
        return view('pengunjung/berandapengunjunglgn');
    }

    public function jenispaketlgn()
    {
        $data = Promo::all();
        return view('pengunjung/jenispaketpengunjunglgn', ['data' => $data]);
    }

    public function galerilgn()
    {
        return view('pengunjung/galeripengunjunglgn');
    }

    public function artikellgn()
    {
        return view('pengunjung/artikelpengunjunglgn');
    }

    public function reservasi()
    {
        return view('pengunjung/reservasi');
    }

    public function history()
    {
        return view('pengunjung/history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
